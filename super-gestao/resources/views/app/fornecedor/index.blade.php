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
<h1>Fornecedor {{ $fornecedores[0]['nome'] }}</h1>
<p>Ativo : {{  $fornecedores[0]['status'] }}</p>
<br>
    @isset($fornecedores[0]['cnpj'])
    <h1>CNPJ: {{ $fornecedores[0]['cnpj'] }}</h1>
    @empty($fornecedores[0]['cnpj'])
    -Vazio
    @endempty
    @endisset
@endisset
