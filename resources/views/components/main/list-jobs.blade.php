<div class="container mt-4">
    @if(session()->has('success'))
        <span>{{ session()->get('success') }}</span>
    @endif
    <h2>Conexões Agendadas</h2>
    <div class="row d-flex justify-content-center">
        @foreach($userData as $user)
            <div class="col-md-3">
                <div class="card text-bg-primary mb-3">
                    <div class="card-header">Total Agendados</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $user['name'] }}</h5>
                        <h4 class="card-title">{{ $user['total'] }}</h4>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
