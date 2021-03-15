<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}


           

 
