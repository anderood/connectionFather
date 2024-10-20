<div class="container">
    <div class="d-flex justify-content-center align-items-center m-4">
        <h2 class="text-center mt-4">Editar Colaborador</h2>
    </div>
    @include('components.error.view_error')
    <form class="row g-3" action="{{ route('users.update', [$user->id]) }}" method="post">
        @csrf
        @method('put')
        <input type="hidden" name="user_data" value="1">
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
        <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
</div>
<br>
<hr>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="text-center mb-4">Redefinir Senha</h2>
    </div>
    <form class="row g-3" action="{{ route('users.update', [$user->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="col-md-6">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password" value="{{ $user->password }}" >
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Confirmar Senha</label>
            <input type="password" class="form-control" name="password" value="{{ $user->password }}" >
        </div>
        <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
    <br>
    <br>
</div>
