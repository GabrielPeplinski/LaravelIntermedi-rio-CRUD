<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@include('layouts.partials.nav-bar')

<h1>Editando o evento : {{ $event->title }}</h1>

<div class="w-25 p-3">
    <form action="/update/{{ $event->id }}" method="POST">
        @csrf
        @method('PUT')
        <!--
    <div class="m-10">
        <label for="labelForImg" class="form-label">Icone do Evento:</label>
        <input id="img" type="file" class="form-control-file" name="img"></input>
    </div>
    -->
        <div class="m-10">
            <label for="labelForName" class="form-label">Nome do Evento</label>
            <input type="text" class="form-control form-control-sm" name="name" placeholder="Qual é o nome"
                value="{{ $event-> name }}" required>
        </div>
        <div class="mb-3">
            <label for="labelForDate" class="form-label">Data</label>
            <input type="date" class="form-control form-control-sm" name="date" id="date" required
                value="{{ $event->date }}">
        </div>
        <div class="mb-3">
            <label for="labelForQtd" class="form-label">Quantidade de vagas</label>
            <input type="number" class="form-control form-control-sm" name="qtd" placeholder="Quantas vagas?"
                pattern="[0-9._%+-]$" value="{{ $event-> qtd }}" required>
        </div>
        <div class="mb-3">
            <label for="labelForTopic" class="form-label">Local</label>
            <input type="text" class="form-control form control-sm" name="location" 
            placeholder="Onde vai ser?" pattern="^[a-zA-Z][a-zA-Z-_\.]{4,20}$" 
            value="{{ $event-> location }}" required>
        </div>
        <div class="mb-3">
            <label for="labelForMessage" class="form-label">Descreva o evento:</label>
            <textarea class="form-control" name="description" rows="3" value="{{ $event->description }}"
                required placeholder="Descreva..."></textarea>
        </div>

        <button type="submit" class="btn btn-outline-primary" value="Editar Evento">Editar Evento</button>
    </form>
</div>