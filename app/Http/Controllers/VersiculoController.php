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

        return Versiculo::create($request->all());
    }

    public function show($id)
    {
        return Versiculo::findOrFail($id);
    }

    public function update($id, Request $request){

      return  Versiculo::findOrFail($id)->update($request->all());

    }

    public function destroy($id){
        Versiculo::destroy($id);
    }

}
