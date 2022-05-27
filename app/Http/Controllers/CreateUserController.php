<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateUserController extends Controller
{
    public function createUser() { 
        return view('createUser'); 
       } 

       function saveData(Request $req)
    {
        $validatedData = Validator::make($req->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'service' => ['required', 'string', 'max:255'],
            'societe' => ['required', 'string', 'max:255'],
        ])->validate();
    
        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $password= $validatedData['password'];
        $service = $validatedData['service'];
        $societe = $validatedData['societe'];
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password= Hash::make('$req->password');
        $user->service=$req->service;
        $user->societe=$req->societe;
        $user->save();

        return redirect('/UserList');
   }
}
