<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objeto;

class CadastrarController extends Controller
{
    //

    public function salvar(Request $request){
        $request->validate(
            [
            "nome" => "required|min:2|max:100",
            "data_descoberta" => "required|date",
            "comestivel" => "required|boolean",
            "altura_media" => "required|numeric",
            "quantidade_petalas" => "required|integer",
            "cor_principal" => "required|min:2|max:100"

        ],
        [
            "nome.required" => "O campo 'Texto curto' deve ser preenchido",
            "nome.min" => "O campo 'Texto curto' deve ter no mínimo 2 caracteres ",
            "nome.max" => "O campo 'Texto curto' deve ter no máximo 100 caracteres ",

            "data_descoberta.required" => "O campo 'data_descoberta' deve ser preenchido",
            "data_descoberta.date" => "Preencha com uma data válida",

            "comestivel.required" => "O campo deve ter uma seleção",
            "comestivel.boolean" => "O campo deve ter uma seleção de valor boolean",

            "altura_media.required" => "O campo deve ser preenchido",
            "altura_media.numeric" => "O campo deve ter duas casas decimais",

            "quantidade_petalas.required" => "O campo deve ser preenchido",
            "quantidade_petalas.integer" => "O campo deve ser preenchido com um número inteiro" 
        ]);

        $objeto = new Objeto();
        $objeto->fill($request->all());
        $objeto->save();

        return view("cadastroSalvo"); 

        // dd($request);
    }
}
