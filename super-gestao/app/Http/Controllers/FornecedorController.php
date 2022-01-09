<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
        0 => ['nome' => 'Malaquias Máquinas', 
                 'status' => 'N',
                 'cnpj' => '37.431.456.507/0001-00',
                 'ddd' => '11',
                 'telefone' => '00000-0000'
        ],
        1 => ['nome' => 'Biridin Superfícies Rígidas',
                'status' => 'S',
                'ddd' => '32',
                'cnpj' => '37.431.456.507/0001-00',
                'telefone' => '00000-0000'
            ],
        2 => ['nome' => 'Power Guido Perfurações',
                'status' => 'S',
                'ddd' => '32',
                'cnpj' => '37.431.456.507/0001-00',
                'telefone' => '00000-0000'
        ]];

        //declaração vazia para forelse
        //$fornecedores = [];
        
        return view('app.fornecedor.index',compact('fornecedores'));
    }
}
 