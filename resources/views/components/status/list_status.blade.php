<div class="container">
    <div class="d-flex justify-content-between align-items-center p-4">
        <h2>Status</h2>
        <a href="{{ route('status.create')}}" class="btn btn-primary">Novo</a>
    </div>
    @include('components.success.view_success')
    <div class="row">
        @foreach($itens as $item)
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow">
                    <div class="card-header bg-primary text-white">{{$item->title}}</div>
                    <div class="position-absolute top-0 end-0 m-2">
                        <a href="{{ route('status.edit', [$item->id]) }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('status.destroy', [$item->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir este agendamento?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                    <div class="card-body position-relative">

                        <h5 class="card-title"><strong>Titulo:</strong> {{$item->title}}</h5>
                        <p class="card-text"><strong>Descrição:</strong> {{ $item->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
