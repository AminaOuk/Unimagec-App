<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vente;
use App\Models\Famille;

class Article extends Model
{
    use HasFactory;

    public function ventes(){

        return $this->hasOne(Vente::class,'id_article','id_article');
        
    }
    public function familles(){

        return $this->hasMany(Famille::class,'id_article','id_article');
        
    }

    public function achats(){

        return $this->hasOne(Achat::class,'id_article','id_article');
        
    }
    public function families(){

        return $this->hasOne(Subfamilie::class,'id_article','id_article');
        
    }
    
    
    



}
