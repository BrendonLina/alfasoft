<h1>Index</h1>

@if(count($contatos) > 0)

    @foreach($contatos as $contato)
        <p>Nome : {{$contato->nome}}</p>
    @endforeach
    
@else

    <p>Não existe contatos</p>

@endif