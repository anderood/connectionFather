<div class="container">
    <div class="d-flex justify-content-between align-items-center p-4">
        <h2>Colaboradores</h2>
        <a href="{{ route('users.create')}}" class="btn btn-primary">Novo</a>
    </div>
    @include('components.success.view_success')
    <div class="row">
        @foreach($users as $user)
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow">
                    <div class="card-body position-relative">
                        <div class="position-absolute top-0 end-0 m-2">
                            <a href="{{ route('users.edit', [$user->id]) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('users.destroy', [$user->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                        <h5 class="card-title"><strong>Nome:</strong> {{$user->name}}</h5>
                        <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                        <p class="card-text"><strong>Telefone:</strong> {{ isset($user->phone) ? $user->phone : 'Não informado'}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
