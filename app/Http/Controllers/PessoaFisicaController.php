<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PessoaFisica;
use Carbon\Carbon;


class PessoaFisicaController extends Controller
{
   
    public function __construct(){}

    public function store(Request $request){
        try {
            $this->validate(
                $request,
                [
                    'firstname' => 'required',
                    'cpf' => [
                        'required',
                        Rule::unique('pessoa_fisica')->where(function ($query) use ($request) {
                            return $query->where('cpf', $request->cpf);
                        })
                    ],
                    'address' => 'required',
                    'city' => 'required',
                    'state' => 'required',
                    'job' => 'required',
                ],
                [
                    'cpf.unique' => 'Voce ja fez sua inscriçao aguarde entraremos em contato com voce',
                ]
            );
        
            $pessoa = new PessoaFisica();
            $pessoa->firstname = $request->firstname;
            $pessoa->cpf = $request->cpf;
            $pessoa->address = $request->address;
            $pessoa->city = $request->city;
            $pessoa->state = $request->state;
            $pessoa->job = $request->job;
            $pessoa->created_at = now()->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i:s');
            $pessoa->updated_at = now()->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i:s');
    

        
            if ($pessoa->save()) {
                return view('comprovante', [
                    'pessoaFisica' => $pessoa,
                    'id' => $pessoa->id,
                    'created_at' => $pessoa->created_at,
                    'updated_at' => $pessoa->updated_at
                ]);
                
                
            } else {
                return response()->json(['message' => 'Erro ao criar Pessoa Fisica'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Voce ja fez sua inscriçao aguarde entraremos em contato com voce' . $e->getMessage()], 500);
        }
}

    
    public function update(Request $request, $id)
{
    try {
        $this->validate(
            $request,
            [
                'firstname' => 'required',
                'cpf' => 'required|unique:pessoa_fisica,cpf,'.$id,
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'job' => 'required',
            ]
        );

        $pessoa = PessoaFisica::find($id);
        if (!$pessoa) {
            return response()->json(['message' => 'Pessoa Fisica não encontrada'], 404);
        }

        $pessoa->firstname = $request->firstname;
        $pessoa->cpf = $request->cpf;
        $pessoa->address = $request->address;
        $pessoa->city = $request->city;
        $pessoa->state = $request->state;
        $pessoa->job = $request->job;

        if ($pessoa->save()) {
            return response()->json(['message' => 'Pessoa Fisica atualizada com sucesso!']);
        } else {
            return response()->json(['message' => 'Erro ao atualizar Pessoa Fisica'], 500);
        }
    } catch (\Exception $e) {
        return response()->json(['message' => 'Erro ao atualizar Pessoa Fisica: ' . $e->getMessage()], 500);
    }
}

    public function show(Request $request, $id){
        try {
            $pessoa = PessoaFisica::findOrFail($id);
            return response()->json($pessoa);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar Pessoa Fisica: ' . $e->getMessage()], 500);
        }
    }

    public function index(Request $request)
    {
        try {
            $pessoas = PessoaFisica::all();
            return response()->json($pessoas);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar Pessoas Fisicas: ' . $e->getMessage()], 500);
        }
    }
    

    public function destroy(Request $request, $id)
{
    try {
        $pessoa = PessoaFisica::findOrFail($id);
        $pessoa->delete();
        return response()->json(['message' => 'Pessoa Fisica deletada com sucesso!']);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Erro ao deletar Pessoa Fisica: ' . $e->getMessage()], 500);
    }
}

}



