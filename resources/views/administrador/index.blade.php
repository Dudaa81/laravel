<div>
    <form action="{{ route('administrador.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="email">email</label>
        <input type="text" name="email" id="email">

        <label for="telefone">telefone</label>
        <input type="text" name="telefone" id="telefone">

        <label for="cpf">cpf</label>
        <input type="text" name="cpf" id="cpf">

        <label for="usuario">usuario</label>
        <input type="text" name="usuario" id="usuario">

        <label for="senha">senha</label>
        <input type="text" name="senha" id="senha">

        <label for="status">status</label>
        <input type="text" name="status" id="status">

        <button type="submit">Salvar</button>

        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Adminstrador</td>
            <td colspan="2">Ações</td>
        </tr>

    @isset($administradores)
            @foreach($administradores as $administrador)

            <tr>
            <td>
                <h3>{{ $administrador->nome }}</h3>
                <h3>{{ $administrador->email }}</h3>
                <h3>{{ $administrador->telefone }}</h3>
                <h3>{{ $administrador->cpf }}</h3>
                <h3>{{ $administrador->usuario }}</h3>
                <h3>{{ $administrador->senha }}</h3>
                <h3>{{ $administrador->status }}</h3>
                </td>
                        <td>
                        <form action="{{ route('administrador.remove', ['id' => $administrador->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>                        </td>
                        <td>
                        <form action="{{ route('administrador.atualizar', ['id' => $administrador->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>                        </td>
                    </tr>
            @endforeach
    @endisset
</div>