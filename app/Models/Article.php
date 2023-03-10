<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['id', 'title', 'content', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
