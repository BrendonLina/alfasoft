<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de Usuarios</title>
</head>
<body>
    @if(count($contatos) > 0)
        @foreach($contatos as $contato)
                <form method="POST" action="/contatos/{{ $contato->id }}/edit">
                    @csrf
                    @method('PUT')
                    <p>{{$contato->nome}}</p>
                    <button class="btn btn-primary" id="btn-primary" type="submit" name="editar">Editar</button>
                </form>
                <form method="POST" action="/deletarusuario/{{ $contato->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary" id="btn-primary" type="submit" name="deletar">Deletar</button>
                </form>  

        @endforeach

    @else

        <p>Não existe contatos</p>

    @endif
</body>
</html>

{{-- <h1>Index</h1>

@if(count($contatos) > 0)

    @foreach($contatos as $contato)
        <p>Nome : {{$contato->nome}} <a>Editar</p>
    @endforeach
    
@else

    <p>Não existe contatos</p>

@endif --}}