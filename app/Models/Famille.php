<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    use HasFactory;

    public function articles()
    {
        return $this->belongsTo(Article::class,'id_article','id_article');
    }
}
