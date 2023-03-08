<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Versiculo;
use Illuminate\Http\Request;

class VersiculoController extends Controller
{
    public function index()
    {
        return Versiculo::all();
    }

    public function store(Request $request)
    {

        $versiculo = Versiculo::create($request->all());

        if ($versiculo) {
            return response()->json([
                'message' => 'Versiculo cadastrado com sucesso!'
            ], 201);
        }

        return response()->json([
            'message' => 'Não foi possivel cadastrar o versiculo'
        ], 404);
    }

    public function show($versiculo)
    {
        $versiculo = Versiculo::find($versiculo);

        if ($versiculo) {


                $versiculo->livro;


            return $versiculo;
        }

        return response()->json([
            'message' => 'Versiculo não encontrado!'
        ]);
    }

    public function update($versiculo, Request $request)
    {

        $versiculo = Versiculo::find($versiculo);

        if ($versiculo) {
            $check = $versiculo->update($request->all());

            if ($check) {
                return response()->json([
                    'message' => 'Versiculo alterado com sucesso!'
                ], 201);
            }

            return response()->json([
                'message' => 'Erro ao alterar versiculo'
            ], 404);
        }

        return response()->json([
            'message' => 'Versiculo não encontrado!'
        ], 404);

    }

    public function destroy($versiculo)
    {
        $destroy = Versiculo::destroy($versiculo);

        if ($destroy) {
            return response()->json([
                'message' => 'Versiculo deletado com sucesso!'
            ], 201);
        }

        return response()->json([
            'message' => 'Não foi possivel deletar o versiculo'
        ]);
    }

}
