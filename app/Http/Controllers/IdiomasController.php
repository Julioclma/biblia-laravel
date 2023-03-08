<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Idiomas;
use Illuminate\Http\Request;

class IdiomasController extends Controller
{
    /**
     * Display a listing of the resource.
     */public function index()
    {
        return Idiomas::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $idiomas = Idiomas::create($request->all());

        if($idiomas){
         return response()->json([
               'idiomas' => $idiomas
            ]);
        }

        return response()->json([

            'message' => 'Erro ao cadastrar idioma'
        ]
        );
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $idiomas = Idiomas::where($id);

        if($idiomas){
            return response()->json([
                'idiomas'=> $idiomas
            ]);
        }

        return response()->json([
            'message' => 'Nenhum idioma encontrado!'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

      $idiomas =  Idiomas::where($id)->update($request->all());

      if($idiomas){
        return response()->json([
            'idiomas' => $idiomas
        ]);

      }

      return response()->json([
        'message' => "Erro ao atualizar idioma"
      ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Idiomas::destroy($id);

    }
}
