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
                 'cnpj' => 'asd',
                 'ddd' => '11',
                 'telefone' => '00000-0000'
        ],
        1 => ['nome' => 'Fornecedor 2',
                'status' => 'S',
                'ddd' => '32',
                'cnpj' => 'asd',
                'telefone' => '00000-0000'
            ],
        2 => ['nome' => 'Fornecedor 3',
                'status' => 'S',
                'ddd' => '32',
                'cnpj' => 'asd',
                'telefone' => '00000-0000'
        ]];
        
        return view('app.fornecedor.index',compact('fornecedores'));
    }
}
 