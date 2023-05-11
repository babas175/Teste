<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'cidades';

    protected $fillable = [
        'nome',
        'estado'
    ];

    public static function createCidade(Cidade $cidade)
    {
        return $cidade->save();
    }

    public static function updateCidade(Cidade $cidade)
    {
        return $cidade->save();
    }

    public static function loadCidadeById($id)
    {
        return Cidade::find($id)->first();
    }

    public static function deleteCidade(Cidade $cidade)
    {
        $cidade = self::loadCidadeById($cidade);
        return $cidade->delete();
    }
}
