<h1>Fornecedor</h1>


@isset($fornecedores)
    {{-- @foreach($fornecedores as $indice => $fornecedor)
        <label for="fornecedores">Fornecedor</label>    
        <p>{{ $fornecedor['nome'] }}</p>
        <label for="status">Status</label>
        <p>{{ $fornecedor['status'] }}</p>
        <label for="telefone">Telefone</label>
        <p>{{ $fornecedor['telefone'] }}</p>
        <label for="cnpj">CNPJ</label>
        <p>{{ $fornecedor['cnpj'] }}</p>
        <hr>
    @endforeach --}}

    <table>
        <tr>
            <th>Iteração</th>
            <th>Fornecedor </th>
            <th> Status</th>
            <th>Telefone</th>
            <th>CNPJ</th>
        </tr>
        @forelse($fornecedores as $indice => $fornecedor)
        <tr>
            <p>{{ $loop->iteration }}</p>
            <td>{{ $fornecedor['nome_abreviado'] }}</td>
            <td>{{ $fornecedor['status'] }}</td>
            <td>{{ $fornecedor['telefone'] }}</td>
            <td>{{ $fornecedor['cnpj'] }}</td>
        </tr>
        @if($loop->first)
        <p>Primeiro resultado encontado</p>
        @endif

        @if($loop->last)
        <p>último resultado encontado</p>
        @endif

        <p>O total de registros encontrado é de {{ $loop->count }}</p>
    </table>
        @empty
    Não existem fornecedores cadastrados 
        @endforelse
@endisset 

    