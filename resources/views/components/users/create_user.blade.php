<div class="container">

    <div class="d-flex justify-content-center align-items-center m-4">
        <h2 class="text-center mb-4">Novo Colaborador</h2>
    </div>

    @include('components.error.view_error')
    <form class="row g-3" action="{{ route('users.store') }}" method="post">
        @csrf
        @method('post')
        <div class="col-md-12">
            <label for="name" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="name" >
        </div>
        <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" >
        </div>
        <div class="col-md-12">
            <label for="phone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" name="phone" >
        </div>
        <div class="col-md-12">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password" >
        </div>
        <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" class="btn btn-primary">Criar</button>
        </div>
    </form>
</div>
