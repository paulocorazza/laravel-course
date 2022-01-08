<h1>Fornecedor</h1>


@isset($fornecedores)
    @foreach($fornecedores as $indice => $fornecedor)
    <label for="fornecedores">Fornecedor</label>    
        <p>{{ $fornecedor['nome'] }}</p>
        <label for="status">Status</label>
        <p>{{ $fornecedor['status'] }}</p>
        <label for="telefone">Telefone</label>
        <p>{{ $fornecedor['telefone'] }}</p>
        <label for="cnpj">CNPJ</label>
        <p>{{ $fornecedor['cnpj'] }}</p>
        <hr>
    @endforeach
@endisset 

    