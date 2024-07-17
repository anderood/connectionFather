<div class="container">
    <div class="d-flex justify-content-between align-items-center p-4">
        <h2>Pacientes</h2>
        <a href="{{ route('patients.create')}}" class="btn btn-primary">Novo</a>
    </div>
    @include('components.success.view_success')
    <div class="row">
        @foreach($patients as $patient)
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow">
                    <div class="card-header bg-primary text-white">{{ $patient->getFullName() }}</div>
                    <div class="position-absolute top-0 end-0 m-2">
                        <a href="{{ route('patients.edit', [$patient->id]) }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('patients.destroy', [$patient->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir este agendamento?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                    <div class="card-body position-relative">

                        <p class="card-text"><strong>Data de Nascimento:</strong> {{ $patient->date_of_birth }}</p>
                        <p class="card-text"><strong>Telefone:</strong> {{ $patient->phone }}</p>
                        <p class="card-text"><strong>Sexo:</strong> {{ $patient->gender === '0' ? 'Masculino' : 'Feminino' }}</p>
                        <p class="card-text"><strong>Email:</strong> {{ $patient->email }}</p>
                        <p class="card-text"><strong>Cidade:</strong> {{ $patient->address->city }}</p>
                        <p class="card-text"><strong>Estado:</strong> {{ $patient->address->state }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
