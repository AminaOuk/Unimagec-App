<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Famille;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
    public function login() { 
        return view('login'); 
       } 

       public function welcome() { 
        return view('welcome'); 
       } 
       public function createDemande() { 
        return view('createDemande'); 
       } 

       public function createArticle() { 
        return view('createArticle'); 
       } 

       public function dashboard() { 
        return view('dashboard'); 
       } 

       public function ArticleAchat() { 

        $data=Article::paginate(7);

        return view('createArticleAchat',['articles'=> $data]); 
       } 

       public function ArticleVente() { 
        $data=Article::paginate(7);

        return view('createArticleVente',['articles'=> $data]); 
       } 

       
       public function ArticleAdmin() { 
        $data1=Article::paginate(7);
        $familles = DB::table('familles')->get();
        //dd( $familles);

        return view('createArticleAdmin',['articles'=> $data1 ,'familles'=> $familles]); 
       } 
        

    public function getSubfamilles(Request $request){
        $subfamilles = DB::table('sousfamilles')
            ->where('id_famille', $request->id_famille)
            ->get();
        
        if (count($subfamilles) > 0) {
            return response()->json($subfamilles);
        }
    }

    public function getSsubfamilles(Request $request)
    {
        $s_sousfamilles = DB::table('s_sousfamilles')
            ->where('id_sousfamille', $request->id_sousfamille)
            ->get();
        if (count($s_sousfamilles) > 0) {
            return response()->json($s_sousfamilles);
        }
    }
    public function getSSsubfamilles(Request $request)
    {
        $s_s_sousfamilles = DB::table('s_s_sousfamilles')
            ->where('id_S_sousfamille', $request->id_S_sousfamille)
            ->get();
        if (count($s_s_sousfamilles) > 0) {
            return response()->json($s_s_sousfamilles);
        }
    }

    public function getSSSsubfamilles(Request $request)
    {
        $s_s_s_sousfamilles = DB::table('s_s_s_sousfamilles')
            ->where('id_S_S_sousfamille', $request->id_S_S_sousfamille)
            ->get();
        if (count($s_s_s_sousfamilles) > 0) {
            return response()->json($s_s_s_sousfamilles);
        }
    }
       public function listeDmande() { 
        return view('listeDemande'); 
       } 

       public function UserList() { 
        return view('UserList'); 
       } 

       public function AdminProfile() { 
        return view('AdminProfile'); 
       }

       public function userVenteProfile() { 
        return view('userVenteProfile'); 
       }

       public function userAchatProfile() { 
        return view('userAchatProfile'); 
       } 

       
} 


