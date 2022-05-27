<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CreateDemandeController;
use App\Http\Controllers\createArticleVenteController;
use App\Http\Controllers\createArticleAchatController;
use App\Http\Controllers\createArticleAdminController;
use App\Http\Controllers\createUserController;
use App\Http\Controllers\SendEmailController;

Route::get('/', function () {   
    return view('index');
});

Route::get('/AdminProfile',[TestController::class,'AdminProfile']);
Route::get('/UserList',[TestController::class,'UserList']);
Route::get('/userVenteProfile',[TestController::class,'userVenteProfile']);
Route::get('/userAchatProfile',[TestController::class,'userAchatProfile']);
Route::get('/welcome',[TestController::class,'welcome']);
Route::get('/login',[TestController::class,'login']);

Route::get('/createDemande',[CreateDemandeController::class,'createDemande']);
Route::get('/createUser',[CreateUserController::class,'createUser']);
Route::post('/createUser',[CreateUserController::class,'saveData']);
Route::post('/createDemande',[CreateDemandeController::class,'addData']);

Route::get('/createArticle',[TestController::class,'createArticle']);

Route::get('/dashboard',[TestController::class,'dashboard']);

Route::get('/createArticleAchat',[TestController::class,'ArticleAchat']);
Route::post('/createArticleAchat',[createArticleAchatController::class,'saveData']);

Route::get('/createArticleVente',[TestController::class,'ArticleVente']);
Route::post('/createArticleVente',[createArticleVenteController::class,'saveData']);

Route::get('/createArticleAdmin',[TestController::class,'ArticleAdmin']);
Route::post('/createArticleAdmin',[createArticleAdminController::class,'saveData']);

Route::get('/get_Subfamilles', [TestController::class, 'getSubfamilles']);
Route::get('/get_Ssubfamilles', [TestController::class,'getSsubfamilles']);
Route::get('/get_S_Ssubfamilles', [TestController::class,'getSSsubfamilles']);
Route::get('/get_S_S_Ssubfamilles', [TestController::class,'getSSSsubfamilles']);

Route::get('/listeDemande',[TestController::class,'listeDmande']);

Route::get('send-email', [SendEmailController::class, 'index']);

Route::get('updateVenteInfo/{id_vente}',[createArticleVenteController::class,'edit']);

Route::put('updateVenteInfo',[createArticleVenteController::class,'update']);

Route::get('updateAdminInfo/{id_subfamilies}',[createArticleAdminController::class,'edit']);

Route::put('updateAdminInfo',[createArticleAdminController::class,'update']);

Route::get('updateVenteInfo/{id_vente}',[createArticleVenteController::class,'edit']);

Route::put('updateVenteInfo',[createArticleVenteController::class,'update']);

Route::get('login',[TestController::class,'login']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

## start authentification routesc##


## end authentification routes ##
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
