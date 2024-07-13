<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    @error('error')
        <span>{{ $message }}</span>
    @enderror
    <form action="{{ route('login.store') }}" method="post">
        @csrf
        <label for="email">
            <input type="email" name="email" value="">
        </label>
        <label for="password">
            <input type="password" name="password" value="">
        </label>
        <button type="submit">Logar</button>
    </form>
</body>
</html>
