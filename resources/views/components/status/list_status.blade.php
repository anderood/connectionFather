<div class="container">
    <div class="container-sm flex-column">
        <h2>Status Cadastrados</h2>
        <a href="{{ route('status.store')}}" class="btn btn-primary">Novo</a>
        @include('components.success.view_success')
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($itens as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <a href="{{ route('status.edit_status', [$item->id])}}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('status.destroy', [$item->id]) }}" method="POST" class="d-inline">
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
