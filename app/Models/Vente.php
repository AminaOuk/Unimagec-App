<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Vente extends Model
{
    use HasFactory;
    protected $table = 'ventes';
    protected $primaryKey="id_vente";
    protected $foreignKey="id_article";
    protected $fillable = [
    	'prix',
        'prix_min',
        'id_article',
        'updated_at',
        'created_at'
    ];

    public function articles()
    {
        return $this->belongsTo(Article::class,'id_article');
    }
    
}
