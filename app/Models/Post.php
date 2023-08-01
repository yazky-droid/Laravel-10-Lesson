<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    // Konfigurasi Mass Assignment
    /**
     * Mass Assignment merupakan sebuah property yang ada di dalam model dan digunakan untuk mengizinkan field-field
     * melakukan manipulasi data ke dalam database, seperti insert, update, delete dan lain sebagainya.
     * 
     */
    
     protected $fillable = [
        'image',
        'title',
        'content',
     ];
}
