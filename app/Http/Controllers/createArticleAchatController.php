<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use  App\Models\Achat;   

class createArticleAchatController extends Controller
{
    function saveData(Request $req)
    {
        $validatedData = Validator::make($req->all(), [
            'Code_fornisseur' => 'required',
            'unite_achat' => 'required',
            'designation_achat' => 'required',
            'prix_achat' => 'required',
        ])->validate();
    
        $Code_fornisseur = $validatedData['Code_fornisseur'];
        $unite_achat = $validatedData['unite_achat'];
        $designation_achat= $validatedData['designation_achat'];
        $prix_achat = $validatedData['prix_achat'];
        $achat = new Achat;
        $achat->Code_fornisseur=$req->Code_fornisseur;
        $achat->unite_achat=$req->unite_achat;
        $achat->designation_achat=$req->designation_achat;
        $achat->prix_achat=$req->prix_achat;
        $achat->id_article=$req->id_article;
        $achat->save();

       
        return redirect('/createArticleAchat');
   }

   public function edit($Code_fornisseur){
     
    $achat = Achat::find($Code_fornisseur);
    
    return response()->json([
        'status'=>200,
        'achat'=>$achat,
    ]);
}

public function update(Request $request){
$Code_fornisseur= $request->input('Code_fornisseur');
$achat = Achat::find($Code_fornisseur);
$achat->unite_achat = $request->input('unite_achat');
$achat->designation_achat = $request->input('designation_achat');
$achat->prix_achat = $request->input('prix_achat');

$achat->update();
return redirect()->back()->with('status','achat informations updated Successfully');

}
}
