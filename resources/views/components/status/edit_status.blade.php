<div class="container">
    <h2>Cadastro de Status</h2>
    <form class="row g-3" action="{{ route('status.update', [$item->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="col-md-6">
            <label for="title" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="title" value="{{ $item->title }}">
        </div>
        <div class="form-floating">
            <textarea name="description" class="form-control" placeholder="Leave a comment here">
                {{ $item->description }}
            </textarea>
            <label for="floatingTextarea">Descrição</label>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
</div>
