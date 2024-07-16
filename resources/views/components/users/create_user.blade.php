<div class="container">
    <h2 class="text-center mb-4">Novo Colaborador</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="row g-3" action="{{ route('users.store') }}" method="post">
        @csrf
        @method('post')
        <div class="col-md-12">
            <label for="name" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="col-md-12">
            <label for="phone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" name="phone" required>
        </div>
        <div class="col-md-12">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Criar</button>
        </div>
    </form>
</div>
