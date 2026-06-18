<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

<    <form action="{{ route('aluno.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}">

        <input type="text" name="nome" id="nome">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
        @if($errors->any())
        <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>

    <table border="1">
        <tr>
            <td>Nome do Aluno</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($alunos)
                @foreach($alunos as $aluno)
                    <tr>
                        <td>
                            <h3>{{ $aluno->nome }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('aluno.remove', ['id' => $aluno->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('aluno.atualizar', ['id' => $aluno->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>

  </body>
</html>