<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreatePersonaRequest;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::get();
        return view('personas', compact('personas'));
    }

    public function show(Persona $persona){
        return view('show', compact('persona'));
    }

    public function create(){
        return view('create',[
            'persona' => new Persona
    ]);
    }

    public function store(CreatePersonaRequest $request){
       $persona = new Persona($request->validated());
       $persona->image = $request->file('image')->store('images');
       $persona->save();
       return redirect()->route('personas.index')->with('estado','La nueva persona fue creada correctamente');
    }

    public function edit(Persona $persona){
        return view('edit',[
            'persona'=>$persona,
        ]);
     }

     public function update(Persona $persona, CreatePersonaRequest $request){
        if($request->hasFile('image')){
            if ($persona->image) {
                Storage::delete($persona->image);
            }
            $persona->fill($request->validated());
            $persona->image = $request->file('image')->store('images');
        } else {
            $persona->fill(array_filter($request->validated()));
        }
        $persona->save();
    
        return redirect()->route('personas.index')->with('estado','Los datos de la persona se actualizaron correctamente'); 
    }
    
    public function destroy(Persona $persona){
        Storage::delete($persona->image);
        $persona->delete();
        return redirect()->route('personas.index')->with('estado','La nueva persona fue eliminada correctamente');
    }

    public function __construct(){ 
        $this->middleware('auth')->except('index','show');
    }

}
