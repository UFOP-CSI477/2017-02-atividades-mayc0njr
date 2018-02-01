<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema Acadêmico</title>
</head>
<body>
    {{--  Links  --}}
    <p><a href="{{ url('/') }}">Principal</a></p>
    <p><a href="{{ url('/listar') }}">Alunos</a></p>
    <p><a href="{{ url('/info') }}">Informações</a></p>
    @yield('conteudo')
    {{--  @yield('darthVaderRidingCharizard')  --}}
</body>
</html>