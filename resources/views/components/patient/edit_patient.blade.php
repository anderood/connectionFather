<div class="container">
    <div class="d-flex justify-content-center align-items-center m-4">
        <h2 class="text-center mt-4">Editar Paciente</h2>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="row g-3" action="{{ route('patients.update', [$patient->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="col-md-6">
            <label for="first_name" class="form-label">Primeiro Nome</label>
            <input type="text" class="form-control" name="first_name" value="{{ $patient->first_name }}">
        </div>
        <div class="col-md-6">
            <label for="last_name" class="form-label">Ultimo Nome</label>
            <input type="text" class="form-control" name="last_name" value="{{ $patient->last_name }}">
        </div>
        <div class="col-md-6">
            <label for="date_of_birth" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" name="date_of_birth" value="{{ $patient->date_of_birth }}">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Sexo</label>
            <select name="gender" class="form-select">
                <option selected>Selecione</option>
                <option value="0" {{ $patient->gender == '0' ? 'selected' : '' }}>Masculino</option>
                <option value="1" {{ $patient->gender == '1' ? 'selected' : '' }}>Feminino</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $patient->email }}">
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" name="phone" value="{{ $patient->phone }}">
        </div>
        <h2>Endereço</h2>
        <div class="col-md-6">
            <label for="zipcode" class="form-label">CEP</label>
            <input type="text" class="form-control" name="zipcode" value="{{ $patient->address->zip_code }}">
        </div>
        <div class="col-md-6">
            <label for="street" class="form-label">Rua</label>
            <input type="text" class="form-control" name="street" value="{{ $patient->address->street }}">
        </div>
        <div class="col-md-6">
            <label for="number" class="form-label">Numero</label>
            <input type="text" class="form-control" name="number" value="{{ $patient->address->number }}">
        </div>
        <div class="col-md-6">
            <label for="complement" class="form-label">Complemento</label>
            <input type="text" class="form-control" name="complement" value="{{ $patient->address->complement }}">
        </div>
        <div class="col-md-6">
            <label for="city" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="city" value="{{ $patient->address->city }}">
        </div>
        <div class="col-md-6">
            <label for="state" class="form-label">Estado</label>
            <input type="text" class="form-control" name="state" value="{{ $patient->address->state }}">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
</div>
