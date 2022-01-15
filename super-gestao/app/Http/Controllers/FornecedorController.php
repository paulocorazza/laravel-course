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
                    'telefone' => '00000-0000',
                    'nome_abreviado' => 'Malaquias'
            ],
            1 => ['nome' => 'Biridin Superfícies Rígidas',
                    'status' => 'S',
                    'ddd' => '32',
                    'cnpj' => '37.431.456.507/0001-00',
                    'telefone' => '00000-0000',
                    'nome_abreviado' => 'Biridin'
                ],
            2 => ['nome' => 'Power Guido Perfurações',
                    'status' => 'S',
                    'ddd' => '32',
                    'cnpj' => '37.431.456.507/0001-00',
                    'telefone' => '00000-0000',
                    'nome_abreviado' => 'Power'
            ],
            3 => ['nome' => 'Paula Tejando',
                 'status' => 'S',
                 'ddd' => '32',
                 'cnpj' => '37.431.456.507/0001-00',
                 'telefone' => '00000-0000',
                 'nome_abreviado' => 'Paula'
            ],
        ];

        //declaração vazia para forelse
        //$fornecedores = [];
        
        return view('app.fornecedor.index',compact('fornecedores'));
    }
}
 