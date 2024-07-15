<div class="container">
    <h2>Novo Colaborador</h2>
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
        <div class="col-md-6">
            <label for="name" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" name="phone">
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password">
        </div>
{{--        <div class="col-md-6">--}}
{{--            <label for="inputPassword4" class="form-label">Confirmação da Senha</label>--}}
{{--            <input type="password" class="form-control" id="inputPassword4">--}}
{{--        </div>--}}
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Criar</button>
        </div>
    </form>
</div>
