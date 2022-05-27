<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Article;
use Illuminate\Support\Facades\Validator;

class CreateDemandeController extends Controller
{
   
    public function createDemande() { 
        return view('createDemande'); 
       }

    function addData(Request $req){

        $validatedData = Validator::make($req->all(), [
            'designation' => 'required',
            'marque' => 'required',
            'unite_stock'=>'required |in:COLIS,ENS,KG,LITRE,M2,M3'
        ])->validate();
    
        $designation = $validatedData['designation'];
        $marque = $validatedData['marque'];
        $unite_stock = $validatedData['unite_stock'];
    
         $article =new Article;
         $article->designation=$req->designation;
         $article->marque=$req->marque;
         $article->unite_stock=$req->unite_stock;

         $article->save();

         return redirect('/listeDemande');
    }
}
