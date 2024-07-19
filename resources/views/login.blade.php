@extends('master')

@section('content')
    <div class="container">
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="form-container col-md-8 col-lg-6">
                <div class="container">
                    <h2 class="fw-bold text-center mb-4">ConnectionFather</h2>
                    @include('components.error.view_error')
                    <form class="row g-3" action="{{ route('login.store') }}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="col-md-12">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="d-grid gap-2 col-12 mx-auto">
                            <button type="submit" class="btn btn-primary">Logar</button>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <div id="g_id_onload"
                             data-client_id="YOUR_GOOGLE_CLIENT_ID"
                             data-context="signin"
                             data-ux_mode="popup"
                             data-callback="handleCredentialResponse"
                             data-auto_prompt="false">
                        </div>
                        <div class="g_id_signin" data-type="standard"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
