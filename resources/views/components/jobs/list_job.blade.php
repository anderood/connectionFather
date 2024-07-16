@php use Carbon\Carbon; @endphp
<div class="container">
    <div class="d-flex justify-content-between align-items-center p-4">
        <h2>Agendamentos</h2>
        <a href="{{ route('jobs.create')}}" class="btn btn-primary">Novo</a>
    </div>
    @include('components.success.view_success')

    <div class="row">
        @foreach($allJobs as $job)
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow">
                    <div class="card-header bg-primary text-white">{{ $job->status[0]['title'] }}</div>
                    <div class="position-absolute top-0 end-0 m-2">
                        <a href="{{ route('jobs.edit', [$job->id]) }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('jobs.destroy', [$job->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir este agendamento?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                    <div class="card-body position-relative">

                        <h5 class="card-title">{{$job->title}}</h5>
                        <p class="card-text"><strong>Paciente:</strong> {{$job->patient->getFullName()}}</p>
                        <p class="card-text"><strong>Colaborador:</strong> {{ $job->user->name }}</p>
                        <p class="card-text"><strong>Agendamento:</strong> {{ Carbon::parse($job->date_scheduling)->format('d/m/Y') }}</p>
                        <p class="card-text"><strong>Status:</strong> {{ $job->status[0]['title'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
