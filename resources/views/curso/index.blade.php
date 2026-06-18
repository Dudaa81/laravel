<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

<    <form action="{{ route('curso.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="periodo">Periodo</label>
        <input type="text" name="periodo" id="periodo">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Curso</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($cursos)
                @foreach($cursos as $curso)
                    <tr>
                        <td>
                            <h3>{{ $curso->nome }}</h3>
                            <h3>{{ $curso->periodo }}</h3>
                            <h3>{{ $curso->salvar }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('curso.remove', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>                        </td>
                        <td>
                        <form action="{{ route('curso.atualizar', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>

  </body>
</html>