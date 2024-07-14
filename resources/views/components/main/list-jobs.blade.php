<div class="container mt-4">
    <h1 class="text-center mb-4">Conexões Agendadas</h1>
    <div class="row d-flex justify-content-center">
        @foreach($userData as $user)
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow">
                    <div class="card-header bg-primary text-white">Total Agendados</div>
                    <div class="card-body bg-light text-dark">
                        <h5 class="card-title">{{ $user['name'] }}</h5>
                        <h4 class="card-title">{{ $user['total'] }}</h4>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
