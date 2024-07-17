<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="form-container col-md-8 col-lg-6">
            <div class="container">
                <h2 class="fw-bold text-center mb-4">ConnectionFather</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
<script src="https://accounts.google.com/gsi/client" async defer></script>
</body>
</html>
