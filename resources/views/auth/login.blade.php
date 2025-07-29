<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@4.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login</h2>
            @if(session('error'))
                <div class="mb-4 text-sm text-red-600 bg-red-100 border border-red-300 rounded px-4 py-2">{{ session('error') }}</div>
            @endif
            <form method="POST" action="{{ route('postlogin') }}" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                    <input type="email" name="email" id="email"
                        class="block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                        value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="text-xs text-red-600 mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" id="password"
                        class="block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                        required>
                    @error('password')
                        <span class="text-xs text-red-600 mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="ml-2 block text-sm text-gray-700" for="remember">Remember Me</label>
                </div>
                <button type="submit" class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
