<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestamentoController extends Controller
{
    public function getData(){

        $json = "[
          {
            'Livro' : 'Velho Testamento'
          },
          {
            'Livro' : 'Novo Testamento'
          }

            ]";

            return $json;
    }
}
