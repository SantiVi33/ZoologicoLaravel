<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Animal;
use App\Models\Personal;
use App\Models\User;  



class ApiController extends Controller 
{
    public function AgregarAnimal(request $request)
    {
        
        $animal = Animal::create($request->all()); 
        return $animal;

    }

    
    public function VerAnimales()
    {

        $animal = Animal::all();
        return $animal;
    }

    public function VerAnimal($id)
    {
        $animal = Animal::findOrFail($id);
        return $animal;
    }

    public function AgregarPersona(request $request)
    {
   
        $persona = Personal::create($request->all());
        return $persona;

    }

    
    public function VerPersonal()
    {

        $persona = Personal::all();
        return $persona;
    }

    public function EliminarAnimal($id) {
        $res = Animal::destroy($id);
        return '{"res":"'.$res.'","msg":"Eliminado"}';
    }

    public function VerUsuarios()
    {
        $usuarios = User::all();
        return $usuarios;
    }

    public function AgregarUsuario(request $request) {
        $usuario = User::create($request->all());
        return $usuario;
    }

    public function login(request $request) {
       $request->validate([
           'email'       => 'required|string|email',
           'password'    => 'required',
           'remember_me' => 'boolean'
       ]);

       $credentials = request(['email','password']);
       if(!Auth::attempt($credentials)) {
           return response()->json([
             'message' => 'Unauthorized'],401);
       }

       $user = $request->user();
       $tokenResult = $user->createToken('Personal Access Token');
       $token = $tokenResult->token;

       if($request->remember_me) {
           $token->expires_at = Carbon::now()->addWeeks(1);
       }

       $token->save();

       return response()->json([
           'access_token' => $tokenResult->accessToken,
           'token_type' => 'Bearer',
           'expires_at' => Carbon::parse(
               $tokenResult->token->expires_at)->toDateTimeString(),
       ]);
       
    }
}


           

 
