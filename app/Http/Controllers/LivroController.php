<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Livro::all();
        if (!$result) {

            return response()->json([
                'message' => 'Nenhum livro encontrado!'
            ], 404);
        }

        return $result;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (Livro::create($request->all())) {
            return response()->json([
                'message' => 'Livro cadastrado com sucesso!'
            ], 201);
        }
        return response()->json(
            [

                'message' => 'Erro ao cadastrar o livro!'

            ],
            404
        );
    }

    /**
     * Display the specified resource.
     */
    public function show($livro)
    {
        $check = Livro::find($livro);

        if ($check) {

            $check->testamento;
              $check->versiculos;


            return $check;
        }

        return response()->json([
            "message" => "Livro não encontrado!"
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $livro)
    {

        $find = Livro::find($livro);

        if (!$find) {
            return response()->json([
                'message' => 'Livro não encontrado!'
            ], 404);
        } else {
            $update = $livro->update($request->all());
            if ($update) {
                return response()->json([
                    'message' => 'Livro atualizado com sucesso!'
                ], 201);
            } else {

                return response()->json([
                    'message' => 'Não foi possivel atualizar o livro!'
                ], 404);
            }
        }



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($livro)
    {
        $destroy = Livro::destroy($livro);

        if ($destroy) {
            return response()->json([
                'message' => 'Livro deletado com sucesso!'
            ], 201);
        }
        return response()->json([
            'message' => 'Não foi possivel deletar o livro!'
        ], 404);
    }
}
