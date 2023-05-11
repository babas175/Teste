<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estado;

class EstadoController extends Controller
{
   
    public function __construct(){}

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'estado' => 'required',
			    'sigla' => 'required',
            ]
        );
        
	    $estadoExistente = Estado::where('sigla', $request->sigla)->first();
	    
	    if($estadoExistente){
	        return response()->json(['message' => 'Estado já cadastrado'], 422);
	    }
	    
	    $estado = new Estado();
	    $estado->estado = $request->estado;
	    $estado->sigla = $request->sigla;
	    
        $estado->save();
        
        return response()->json(['message' => 'Estado criado com sucesso!']);
    }
    
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'estado' => 'required',
			    'sigla' => 'required',
            ]
        );
        
	    $estado = Estado::find($id);
	    $estado->estado_name = $request->estado_name;
	    $estado->sigla = $request->sigla;
	    
        $estado->save();
        
        return response()->json(['message' => 'Estado atualizado com sucesso!']);
    }

    public function index(Request $request)
    {
    	$this->validate(
            $request,
            [
                'estado' => 'nullable'
            ]
        );
        
        if(null != $request->estado_name){
        	$result = Estado::where('estado', $request->estado_name)->orderBy('estado')->get();
        	return response()->json($result);
        }
        
        return response()->json(Estado::orderBy('estado')->get());
    }

    public function show(Request $request, $id)
    {
        $estado = Estado::find($id);
        
        if($estado) {
            return response()->json($estado);
        } else {
            return response()->json(['message' => 'Estado não encontrado'], 404);
        }
    }


    public function destroy(Request $request, $id)
    {
        $estado = Estado::find($id);
        
        if($estado) {
            $estado->delete();
            return response()->json(['message' => 'Estado deletado com sucesso!']);
        } else {
            return response()->json(['message' => 'Estado não encontrado'], 404);
        }
    }

}


