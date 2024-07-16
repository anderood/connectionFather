<div class="container">
    <h2>Novo Agendamento</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="row g-3" action="{{ route('jobs.store_job') }}" method="post">
        <input type="hidden" name="status_id" value="1">
        @csrf
        <div class="col-md-6">
            <label for="title" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="title" placeholder="Ex: Realizar a Conexão do Paciente">
        </div>
        <div class="col-md-6">
            <label for="date_scheduling" class="form-label">Data de Agendamento</label>
            <input class="form-control" type="date" name="date_scheduling"/>
        </div>
        <div class="col-md-6">
            <label for="user_id" class="form-label">Usuario</label>
            <select name="user_id" class="form-select">
                <option value="">Selecione</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="patient_id" class="form-label">Pacientes</label>
            <select name="patient_id" class="form-select">
                <option value="">Selecione</option>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->getFullName() }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12">
            <label for="address_id" class="form-label">Endereço</label>
            <select name="address_id" class="form-select">
                <option value="">Selecione</option>
                <option value="{{ $patient->address->id }}">
                    {{ $patient->address->getFullAddress() }}
                </option>
            </select>
        </div>
        <div class="col-md-12">
            <label class="form-label">Descrição</label>
            <textarea class="form-control" placeholder="Coloque uma descrição aqui..." style="height: 100px" name="description"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Agendar</button>
        </div>
    </form>
</div>
