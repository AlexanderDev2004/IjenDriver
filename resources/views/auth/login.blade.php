<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 font-sans min-h-screen">
    <a href="{{ url('/') }}">
        <img src="{{ asset('IjenDriver.png') }}" alt="Logo" class="block mx-auto w-24 mt-10">
    </a>
    <div class="max-w-md mx-auto mt-12 bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Login Admin</h2>
        @if ($errors->has('login_error'))
            <div class="text-red-600 text-center mb-4">{{ $errors->first('login_error') }}</div>
        @endif
        <form method="POST" action="{{ route('postlogin') }}">
            @csrf
            <label class="block mb-1 text-gray-700">Email</label>
            <input type="text" name="email" required class="w-full px-3 py-2 mb-1 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ old('email') }}" placeholder="Enter your email">
            @error('email')
                <div class="text-red-600 text-sm mb-3">{{ $message }}</div>
            @enderror

            <label class="block mb-1 text-gray-700">Password</label>
            <input type="password" name="password" required class="w-full px-3 py-2 mb-1 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your password">
            @error('password')
                <div class="text-red-600 text-sm mb-3">{{ $message }}</div>
            @enderror

            <button type="submit" class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white rounded font-semibold text-lg transition">Login</button>
        </form>
    </div>
</body>
</html>
