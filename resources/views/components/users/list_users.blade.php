<div class="container">
    <div class="container-sm flex-column">
        <h2>Usuarios Cadastrados</h2>
        <a href="{{ route('users.create_user')}}" class="btn btn-primary">Novo</a>
    </div>
    <div class="container-sm">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Completo</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        <a href="{{ route('users.edit_user', [$user->id])}}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('users.destroy', [$user->id])}}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

