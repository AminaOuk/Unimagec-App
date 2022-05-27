<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;
    protected $primaryKey="Code_fornisseur";

    public function articles()
    {
        return $this->belongsTo(Article::class,'id_article');
    }
}
