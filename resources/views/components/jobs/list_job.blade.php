<div class="container">
    <div class="container-sm flex-column">
        <h2>Agendamentos Cadastrados</h2>
        <a href="{{ route('jobs.create_job')}}" class="btn btn-primary">Novo</a>
        @include('components.success.view_success')
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Paciente</th>
            <th scope="col">Atendente</th>
            <th scope="col">Data de Agendamento</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allJobs as $job)
            <tr>
                <td>{{$job->title}}</td>
                <td>{{$job->patient->getFullName()}}</td>
                <td>{{ $job->user->name }}</td>
                <td>{{ $job->date_scheduling }}</td>
                <td>{{ $job->status_id }}</td>
                <td>
                    <a href="{{ route('jobs.edit_job', [$job->id]) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('jobs.destroy', [$job->id]) }}" method="POST" class="d-inline">
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
