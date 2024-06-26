<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::get();
        return view('personas', compact('personas'));
    }

    public function show($nPerCodigo){
        return view('show',[
            'persona' => Persona::find($nPerCodigo)
        ]);
    }

    public function create(){
        return view('create');
    }

    public function store(CreatePersonaRequest $request){
       Persona::create($request->validated());
       return redirect()->route('personas.index');
    }

    public function edit(Persona $nPerCodigo){
        return view('edit',[
            'persona'=>$nPerCodigo
        ]);
     }

    public function update(Persona $nPerCodigo, CreatePersonaRequest $request){
        $nPerCodigo->update($request->validated());
        return redirect()->route('personas.index'); 
    }
}
