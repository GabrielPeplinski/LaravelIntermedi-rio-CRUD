<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@include('layouts.partials.nav-bar')

<h3>Sobre o evento {{$event->name}}:</h3>

<div class="container">
        Nome: {{$event->name}} <br>
        Data: {{$event->date}} <br>
        Onde vai ser? {{$event->location}} <br>
        Vagas: {{$event->qtd}} <br>
        Descricao : {{$event->description}} <br>
        <form action="/show/{{ $event->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn-danger" type="submit">Deletar</button>
        </form>
        <form action="/edit/{{ $event->id }}" method="POST">
                @csrf
                @method('GET')
                <button class="btn-warning" type="submit">Editar</button>
        </form>
</div>
