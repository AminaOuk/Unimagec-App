<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use  App\Models\Vente;                                                                                                                                                                                                                                                                                                                          

class createArticleVenteController extends Controller
{
    function saveData(Request $req)
    {
        $validatedData = Validator::make($req->all(), [
            'prix' => 'required',
            'prix_min' => 'required',
        ])->validate();
    
        $prix = $validatedData['prix'];
        $prix_min = $validatedData['prix_min'];
        
        $vente = new Vente;
        $vente->prix=$req->prix;
        $vente->prix_min=$req->prix_min;
        $vente->id_article=$req->id_article;
        $vente->save();

            
        return redirect('/createArticleVente');
   }

    public function edit($id_vente){
     
        $vente = Vente::find($id_vente);
        
        return response()->json([
            'status'=>200,
            'vente'=>$vente,
        ]);
   }

   public function update(Request $request){
    $id_vente= $request->input('id_vente');
    $vente = Vente::find($id_vente);
    $vente->prix = $request->input('prix');
    $vente->prix_min = $request->input('prix_min');

    $vente->update();
    return redirect()->back()->with('status','vente informations updated Successfully');

}

}
