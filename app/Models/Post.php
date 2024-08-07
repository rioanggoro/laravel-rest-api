<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
   
    use HasFactory;
    //kolom apa saja yang boleh diisi
    protected $fillable = [
        'title',
        'news_content','author'
    ];

    public function writer(): BelongsTo{
        return $this->belongsTo(User::class, 'author', 'id');
    } // mendapatkan data author dengan name user
}
