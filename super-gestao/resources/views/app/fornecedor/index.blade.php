<h1>Fornecedor</h1>
@php
/*
if(empty($variavel)){

}
*/
@endphp
{{-- @dd($fornecedores);

@if(count($fornecedores) > 0 && count($fornecedores) < 10 )
    <h3>
      Existem alguns fornecedores cadastrados.  
    </h3>
@elseif(count($fornecedores) > 10)
    <h3>
        Existem vários fornecedores cadastrados
    </h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}
@isset($fornecedores)
<h1>Fornecedor {{ $fornecedores[1]['nome'] }}</h1>
<p>Ativo : {{  $fornecedores[1]['status'] }}</p>
<br>
<h1>CNPJ: {{ $fornecedores[1]['cnpj'] }} </h1>
telefone:({{ $fornecedores[1]['ddd'] ?? '' }}){{ $fornecedores[0]['telefone'] }}
    @switch($fornecedores[1]['ddd'])   
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85') 
            Fortaleza - CE
            @break 
        @default
          Estado não identificado   
    @endswitch
@endisset 
    