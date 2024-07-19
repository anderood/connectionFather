<div class="container">
    <div class="d-flex justify-content-center align-items-center m-4">
        <h2 class="text-center mb-4">Novo Status</h2>
    </div>

    @include('components.error.view_error')
    <form class="row g-3" action="{{ route('status.store') }}" method="post">
        @csrf
        @method('post')
        <div class="col-md-6 col-md-12">
            <label for="title" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="title" placeholder="Ex: Novo, Agendado, Concluido">
        </div>
        <div class="col-md-6 col-md-12">
            <label for="title" class="form-label">Descrição</label>
            <textarea name="description" class="form-control" placeholder="Escreva uma descrição aqui..."></textarea>
        </div>

        <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" class="btn btn-primary">Criar</button>
        </div>
    </form>
</div>
