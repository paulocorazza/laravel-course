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
            <th>Fornecedor </th>
            <th> Status</th>
            <th>Telefone</th>
            <th>CNPJ</th>
        </tr>
        @forelse($fornecedores as $indice => $fornecedor)
        <tr>
            <td>
                {{ $fornecedor['nome'] }} 
            </td>
            <td>
                {{ $fornecedor['status'] }}
            </td>
            <td>
                {{ $fornecedor['telefone'] }}
            </td>
            <td>
                {{ $fornecedor['cnpj'] }}
            </td>
        </tr>
    </table>
  
    @empty
    Não existem fornecedores cadastrados 
    @endforelse
@endisset 

    