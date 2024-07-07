<div class="container">
    <div class="container-sm flex-column">
        <h2>Agendamentos Cadastrados</h2>
        <a href="{{ route('jobs.create_job')}}" class="btn btn-primary">Novo</a>
        @include('components.success.view_success')
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Paciente</th>
            <th scope="col">Atendente</th>
            <th scope="col">Data de Agendamento</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allJobs as $job)
            <tr>
                <td> NOme Paciente</td>
                <td> Nome do Atendente </td>
                <td>2024-01-01</td>
                <td>
                    <a href="#" class="btn btn-primary">Editar</a>
                    <form action="#" method="POST" class="d-inline">
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
