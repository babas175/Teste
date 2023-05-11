<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{
    public function store(Request $request)
{
    try {
        $request->validate([
            'sigla' => 'required|string|max:25',
            'nome' => 'required|string|max:255',
        ]);

        $cidade = new Cidade();
        $cidade->sigla = $request->input('sigla');
        $cidade->nome = $request->input('nome');
        $cidade->save();

        return response()->json([
            'message' => 'Cidade cadastrada com sucesso!',
            'data' => $cidade
        ], 201);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Erro ao cadastrar Cidade: ' . $e->getMessage()], 500);
    }
}
    public function update(Request $request, $id)
    {
        try {
            $cidade = Cidade::find($id);

            if (!$cidade) {
                return response()->json(['message' => 'Cidade não encontrada'], 404);
            }

            $cidade->city_name = $request->city_name;
            $cidade->estado = $request->estado;

            if ($cidade->save()) {
                return response()->json(['message' => 'Cidade atualizada com sucesso!']);
            } else {
                return response()->json(['message' => 'Erro ao atualizar Cidade'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao atualizar Cidade: ' . $e->getMessage()], 500);
        }
    }
    public function index(Request $request)
{
    try {
        $cidades = Cidade::all();
        return response()->json($cidades);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Erro ao buscar lista de cidades: ' . $e->getMessage()], 500);
    }
}

public function show(Request $request, $id)
{
    try {
        $cidade = Cidade::find($id);

        if (!$cidade) {
            return response()->json(['message' => 'Cidade não encontrada'], 404);
        }

        return response()->json($cidade);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Erro ao buscar Cidade: ' . $e->getMessage()], 500);
    }
}


    public function destroy(Request $request, $id)
    {
        try {
            $cidade = Cidade::find($id);

            if (!$cidade) {
                return response()->json(['message' => 'Cidade não encontrada'], 404);
            }

            if ($cidade->delete()) {
                return response()->json(['message' => 'Cidade deletada com sucesso!']);
            } else {
                return response()->json(['message' => 'Erro ao deletar Cidade'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao deletar Cidade: ' . $e->getMessage()], 500);
        }
    }



    
}
