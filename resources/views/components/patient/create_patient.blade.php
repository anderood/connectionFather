<div class="container">
    <div class="d-flex justify-content-center align-items-center m-4">
        <h2 class="text-center mb-4">Novo Paciente</h2>
    </div>
    @include('components.error.view_error')
    <form class="row g-3" action="{{ route('patients.store') }}" method="post">
        @csrf
        <div class="col-md-6">
            <label for="first_name" class="form-label">Primeiro Nome</label>
            <input type="text" class="form-control" name="first_name">
        </div>
        <div class="col-md-6">
            <label for="last_name" class="form-label">Ultimo Nome</label>
            <input type="text" class="form-control" name="last_name">
        </div>
        <div class="col-md-6">
            <label for="date_of_birth" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" name="date_of_birth">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Sexo</label>
            <select name="gender" class="form-select">
                <option selected>Selecione</option>
                <option value="0">Masculino</option>
                <option value="1">Feminino</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" name="phone">
        </div>
        <h2>Endereço</h2>
        <div class="col-md-6">
            <label for="zipcode" class="form-label">CEP</label>
            <input type="text" class="form-control" name="zipcode">
        </div>
        <div class="col-md-6">
            <label for="street" class="form-label">Rua</label>
            <input type="text" class="form-control" name="street">
        </div>
        <div class="col-md-6">
            <label for="number" class="form-label">Numero</label>
            <input type="text" class="form-control" name="number">
        </div>
        <div class="col-md-6">
            <label for="complement" class="form-label">Complemento</label>
            <input type="text" class="form-control" name="complement">
        </div>
        <div class="col-md-6">
            <label for="city" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="city">
        </div>
        <div class="col-md-6">
            <label for="state" class="form-label">Estado</label>
            <input type="text" class="form-control" name="state">
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" name="observations"></textarea>
            <label for="floatingTextarea">Comments</label>
        </div>
        <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
    <br>
    <br>
</div>
