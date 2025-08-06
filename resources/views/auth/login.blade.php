<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <style>
        body { font-family: Arial, sans-serif; background: #232222; }
        .login-container {
            width: 350px;
            margin: 80px auto;
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h2 { text-align: center; margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="password"] {
            width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;
        }
        button {
            width: 100%; padding: 10px; background: #007bff; color: #fff; border: none; border-radius: 4px;
            font-size: 16px; cursor: pointer;
        }
        button:hover { background: #0056b3; }
        .error { color: red; text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>
    <a href="{{ url('/') }}">
        <img src="{{ asset('IjenDriver.png') }}" alt="Logo" style="display: block; margin: 0 auto; width: 100px;">
    </a>
    <div class="login-container">
        <h2>Login Admin</h2>
        @if ($errors->has('login_error'))
            <div class="error">{{ $errors->first('login_error') }}</div>
        @endif
        <form method="POST" action="{{ route('postlogin') }}">
            @csrf
            <label>Username</label>
            <input type="text" name="username" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
