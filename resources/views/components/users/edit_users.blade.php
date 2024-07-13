

        <form class="row g-3" action="{{ route('users.update', [$user->id]) }}" method="post">
            @csrf
            @method('put')
            <h2>Editar de Colaborador</h2>
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
                    <input type="text" class="form-control" name="password" >
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
        </form>
