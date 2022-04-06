<div class="w-25 p-3">
<form action="/events" method="POST">
    @csrf
    <!--
    <div class="m-10">
        <label for="labelForImg" class="form-label">Icone do Evento:</label>
        <input id="img" type="file" class="form-control-file" name="img"></input>
    </div>
    -->
    <div class="m-10">
        <label for="labelForName" class="form-label">Nome do Evento</label>
        <input type="text" class="form-control form-control-sm" name="name" 
                placeholder="Qual é o nome" required>
    </div>
    <div class="mb-3">
        <label for="labelForDate" class="form-label">Data</label>
        <input type="date" class="form-control form-control-sm" name="date" id="date" required>
    </div>
    <div class="mb-3">
        <label for="labelForQtd" class="form-label">Quantidade de vagas</label>
        <input type="number" class="form-control form-control-sm" name="qtd" placeholder="Quantas vagas?"
            pattern="[0-9._%+-]$" required>
    </div>
    <div class="mb-3">
        <label for="labelForTopic" class="form-label">Local</label>
        <input type="text" class="form-control form control-sm" name="location" placeholder="Onde vai ser?"
            pattern="^[a-zA-Z][a-zA-Z-_\.]{4,20}$" required>
    </div>
    <div class="mb-3">
        <label for="labelForMessage" class="form-label">Descreva o evento:</label>
        <textarea class="form-control" name="description" rows="3" required placeholder="Descreva..."></textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary" value="Criar Evento">Criar Evento</button>
</form>
</div>