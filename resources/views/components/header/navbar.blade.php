<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-light" href="{{ route('dashboard.index') }}">ConnFather</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}" href="{{ route('dashboard.index') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">Colaboradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('patients*') ? 'active' : '' }}" href="{{ route('patients.index') }}">Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('status*') ? 'active' : '' }}" href="{{ route('status.index') }}">Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('jobs*') ? 'active' : '' }}" href="{{ route('jobs.index') }}">Agendamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('login*') ? 'active' : '' }}" href="{{ route('login.destroy') }}">Logout</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

