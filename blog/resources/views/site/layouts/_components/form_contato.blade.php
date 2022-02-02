{{ $slot }}

<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input type="text" placeholder="Nome" name="nome" class="{{ $classe }}>
    <br>
    <input type="text" placeholder="Telefone" name="telefone" class="{{ $classe }}>
    <br>
    <input type="text" placeholder="E-mail" name="email" class="{{ $classe }}">
    <br>
    <select class="borda-preta" name="motivo">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea class="borda-preta">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>