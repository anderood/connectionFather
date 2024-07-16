<div class="container">
    <div class="d-flex justify-content-between align-items-center p-4">
        <h2>Colaboradores</h2>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="row g-3" action="{{ route('users.update', [$user->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="col-md-6">
            <label for="name" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" name="phone" value="{{ $user->phone }}">
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password" value="{{ $user->password }}" >
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
</div>

