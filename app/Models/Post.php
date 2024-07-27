<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   
    use HasFactory;
    //kolom apa saja yang boleh diisi
    protected $fillable = [
        'title',
        'news_content','author'
    ];
}
