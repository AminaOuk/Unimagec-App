<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subfamilie extends Model
{
    use HasFactory;
    protected $primaryKey="id_subfamilies";

    public function articles()
    {
        return $this->belongsTo(Article::class,'id_article');
    }
}
