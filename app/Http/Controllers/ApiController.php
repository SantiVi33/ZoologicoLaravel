<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Persona;
use App\Models\User; 

class ApiController extends Controller 
{
    public function AgregarAnimal(request $request)
    {
        
        $animal = Animal::create($request->all()); 
        return $animal;

    }

    
    public function VerAnimal()
    {

        $animal = Animal::all();
        return $animal;
    }

    public function AgregarPersona(request $request)
    {
   
        $persona = Persona::create($request->all());
        return $persona;

    }

    
    public function VerPersonal()
    {

        $persona = Persona::all();
        return $persona;
    }
}


            //$table->id();
            //$table->integer('Nombre');
            //$table->string('Apellido');
            //$table->float('Trabajo');
            //$table->timestamps();

           // $table->id();
            //$table->string('Nombre');
            //$table->string('Tipo');
            //$table->string('Especie');
            //$table->string('PaisOrigen');
            //$table->string('ZonasDondeHabitan');
            //$table->string('Alimentacion');
            //$table->integer('Edad');
            //$table->string('URLfoto');
            //$table->timestamps(); 