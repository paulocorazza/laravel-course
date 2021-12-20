<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
        0 => ['nome' => 'fornecedor1', 
                 'status' => 'N',
                 'cnpj' => 'asd'
        ],
        1 => [
            'nome' => 'Fornecedor 2',
            'status' => 'S'
            ]
        ];
        
        return view('app.fornecedor.index',compact('fornecedores'));
    }
}
 