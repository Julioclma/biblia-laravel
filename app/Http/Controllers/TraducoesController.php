<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Traducoes;
use Illuminate\Http\Request;

class TraducoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Traducoes::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $traducoes = Traducoes::create($request->all());

        if($traducoes){
         return response()->json([
               'traducoes' => $traducoes
            ]);
        }

        return response()->json([

            'message' => 'Erro ao cadastrar tradução'
        ]
        );
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $traducoes = Traducoes::where($id);

        if($traducoes){
            return response()->json([
                'traducoes'=> $traducoes
            ]);
        }

        return response()->json([
            'message' => 'Nenhuma tradução encontrada!'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

      $traducoes =  Traducoes::where($id)->update($request->all());

      if($traducoes){
        return response()->json([
            'traducoes' => $traducoes
        ]);

      }

      return response()->json([
        'message' => "Erro ao atualizar tradução"
      ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Traducoes::destroy($id);

    }
}
