<div class="container">
    <h2>Editar Status</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        </div>
    @endif
    <form class="row g-3" action="{{ route('status.update', [$item->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="col-md-6 col-md-12">
            <label for="title" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="title" placeholder="Ex: Novo, Agendado, Concluido" value="{{ $item->title }}">
        </div>
        <div class="col-md-6 col-md-12">
            <label for="title" class="form-label">Descrição</label>
            <textarea name="description" class="form-control" placeholder="Escreva uma descrição aqui...">{{ $item->description }}</textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
</div>
