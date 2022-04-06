<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@include('layouts.partials.nav-bar')

@if(count($events) > 0)
    <h3>Lista de Eventos Cadastrados</h3>
@else
    <h3>Não há Eventos Cadastrados</h3>
@endif

@foreach($events as $event)
    <div class="container">
        Nome: {{$event->name}} <br>
        Data: {{$event->date}} <br>
        Onde vai ser? {{$event->location}} <br>
        Vagas: {{$event->qtd}} <br>
        Descricao : {{$event->description}} <br>
        <form action="/show/{{$event->id}}" method="GET">
            <button class="btn-primary" type="submit">Ver mais</button>
        </form>
    </div>
@endforeach