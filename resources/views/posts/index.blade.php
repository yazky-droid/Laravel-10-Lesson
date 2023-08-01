<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts - Laravel 10</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Tutorial CRUD Laravel 10</h3>
                    <h5 class="text-center"><a href="https://yazkymaulana.my.id">www.yazkymaulana.my.id</a></h5>
                </div>    
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('posts.create')}}" class="btn btn-md btn-success mb-3">Tambah Data</a>
                        <table class="table table-bordered">
                            <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">gambar</th>
                                    <th scope="col">judul</th>
                                    <th scope="col">content</th>
                                    <th scope="col">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td>{{ $post->title }}</td>
                                        <td>{!! $post->content !!}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty

                                    <div class="alert alert-danger">
                                        Data Post Belum Tersedia.
                                    </div>
                                    
                                @endforelse
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>    
        </div>    
    </div>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr

        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!');
        
        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', "GAGAL!");

        @endif
    </script>
</body>
</html>