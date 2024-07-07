<div class="container">
    <h2>Novo Agendamento</h2>
    <form class="row g-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="name" class="form-label">Data de Agendamento</label>
            <input id="startDate" class="form-control" type="date" />
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Usuario</label>
            <select id="inputState" class="form-select">
                <option selected>Selecione</option>
                <option>Fulano</option>
                <option>Circlano</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Endereço</label>
            <select id="inputState" class="form-select">
                <option selected>Selecione</option>
                <option>Fulano</option>
                <option>Circlano</option>
            </select>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Descrição</label>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Agendar</button>
        </div>
    </form>
</div>
