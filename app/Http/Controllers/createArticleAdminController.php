<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use  App\Models\Subfamilie; 

class createArticleAdminController extends Controller
{
    function saveData(Request $req)
    {
       /* $validatedData = Validator::make($req->all(), [
            'type_article' => 'required',
            'TVA' => 'required',
            'familleComptable' => 'required',
            'famille' => 'required',
            'subfamille' => 'required',
            'Ssubfamille' => 'required',
            'SSsubfamille' => 'required',
            'SSSsubfamille' => 'required',
        ])->validate();
    
        $type_article = $validatedData['type_article'];
        $TVA = $validatedData['TVA'];
        $familleComptable = $validatedData['familleComptable'];
        $famille = $validatedData['famille'];
        $subfamille  = $validatedData['subfamille'];
        $Ssubfamille = $validatedData['Ssubfamille'];
        $SSsubfamille = $validatedData['SSsubfamille'];
        $SSSsubfamille = $validatedData['SSSsubfamille'];*/
        $famille = explode(':',$req->famille);
        $subfamille = explode(':',$req->subfamille);
        $Ssubfamille = explode(':',$req->Ssubfamille);

        $subfamilie = new Subfamilie;
        $subfamilie->type_article=$req->type_article;
        $subfamilie->TVA=$req->TVA;
        $subfamilie->familleComptable=$req->familleComptable;
        $subfamilie->famille=$famille[1];
        $subfamilie->subfamille=$subfamille[1];
        $subfamilie->Ssubfamille=$Ssubfamille[1];
        $subfamilie->SSsubfamille=$req->SSsubfamille;
        $subfamilie->SSSsubfamille=$req->SSSsubfamille;
        $subfamilie->id_article=$req->id_article;

        $subfamilie->save();

        return redirect('/createArticleAdmin');
   }
   public function edit($id_subfamilies){
     
    $subfamilie = Subfamilie::find($id_subfamilies);
    
    return response()->json([
        'status'=>200,
        'subfamilie'=>$subfamilie,
    ]);
}

public function update(Request $request){
$id_subfamilies= $request->input('id_subfamilies');
$subfamilie = Subfamilie::find($id_subfamilies);
$subfamilie->type_article = $request->input('type_article');
$subfamilie->TVA = $request->input('TVA');
$subfamilie->familleComptable = $request->input('familleComptable');
$subfamilie->famille = $request->input('famille');
$subfamilie->subfamille = $request->input('subfamille');
$subfamilie->Ssubfamille = $request->input('Ssubfamille');
$subfamilie->SSsubfamille = $request->input('SSsubfamille');
$subfamilie->SSSsubfamille = $request->input('SSSsubfamille');
$subfamilie->update();
return redirect()->back()->with('status','admin informations updated Successfully');

}
}
