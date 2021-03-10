<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Persona;

class ApiController extends Controller 
{
    //public function AgregarAnimal(request $request)
    //{
        
       // $animal = Animal::create($request->all()); 
      //  return $animal;

    //}

    
    public function VerAnimal()
    {

        $animal = Animal::all();
        return $animal;
    }

    //public function AgregarPersona(request $request)
    //{
   
        //$persona = Persona::create($request->all());
      //  return $persona;

    //}

    
    public function VerPersonal()
    {

        $persona = Persona::all();
        return $persona;
    }
}
