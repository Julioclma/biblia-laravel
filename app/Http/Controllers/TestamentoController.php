<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testamento;
use Illuminate\Http\Request;

class TestamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Testamento::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $testamento = Testamento::create($request->all());


        if($testamento){
            return response()->json([
                'message' => 'Testamento cadastrado com sucesso!'
            ], 201);
        }

        return response()->json([
            'message' => 'Não foi possivel cadastrar testamento!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($testamento)
    {
        $testamento = Testamento::find($testamento);

        if($testamento){

                $testamento->livros;

            return $testamento;
        }


        return response()->json([
            'message' => 'Testamento inválido!'
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $testamento)
    {
        $testamento = Testamento::find($testamento);

        if($testamento){
            $check = $testamento->update($request->all());

            if($check){
                return response()->json([
                    'message' => 'Testamento atualizado com sucesso'
                ], 201);
            }else{
                return response()->json([
                    'message' => 'Não foi possivel atualizar o testamento!'
                ], 404);
            }
        }




        return  response()->json([
            'message' => 'Testamento não encontrado!'
        ], 201);;


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($testamento)
    {
        $destroy = Testamento::destroy($testamento);


        if($destroy){
            return response()->json([
                'message' => 'Testamento deletado com sucesso!'
            ], 201);
        }

        return response()->json([

            'message' => 'Não foi possivel deletar o testamento!'
        ], 404);

    }
}
