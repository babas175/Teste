<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPessoaFisica
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
     
        $cpf = $request->cpf;
        $name = $request->fname;

        if (strlen($cpf) != 11) {
            return response()->json(['message' => 'CPF inválido'], 400);
        }

        if (empty($name)) {
            return response()->json(['message' => 'Nome não pode ser vazio'], 400);
        }

        return $next($request);
    }
}
