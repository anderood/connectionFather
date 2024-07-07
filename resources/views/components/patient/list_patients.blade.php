<div class="container">
        <div class="container-sm flex-column">
            <h2>Pacientes Cadastrados</h2>
            <a href="{{ route('patients.store')}}" class="btn btn-primary">Novo</a>
            @include('components.success.view_success')
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
            @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->first_name }}</td>
                    <td>{{ $patient->phone }}</td>
                    <td>{{ $patient->gender === '0' ? 'Masculino' : 'Feminino' }}</td>
                    <td>
                        <a href="{{ route('patients.edit_patient', [$patient->id])}}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('patients.destroy', [$patient->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
