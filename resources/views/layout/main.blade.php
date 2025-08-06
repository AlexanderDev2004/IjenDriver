<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'IjenDriver')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            {{-- Tailwind CSS v4 inline styles for consistency with welcome.blade.php --}}
            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
            @layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--color-red-500:oklch(.637 .237 25.331);--color-blue-600:oklch(.546 .245 262.881);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-white:#fff;--color-black:#000;--spacing:.25rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem}}
            @layer base{*,:after,:before{box-sizing:border-box;border:0 solid;margin:0;padding:0}html{line-height:1.5;font-family:var(--font-sans)}body{line-height:inherit}}
            @layer utilities{.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.text-\[\#1b1b18\]{color:#1b1b18}.dark\:text-\[\#EDEDEC\]{color:#ededec}.text-\[\#706f6c\]{color:#706f6c}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.text-\[\#f53003\]{color:#f53003}.dark\:text-\[\#FF4433\]{color:#f43}.bg-\[\#fff2f2\]{background-color:#fff2f2}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.border-\[\#19140035\]{border-color:#19140035}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.bg-white{background-color:var(--color-white)}.dark\:bg-\[\#161615\]{background-color:#161615}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{box-shadow:inset 0px 0px 0px 1px rgba(26,26,0,0.16)}.dark\:shadow-\[\inset_0px_0px_0px_1px_\#fffaed2d\]{box-shadow:inset 0px 0px 0px 1px #fffaed2d}.min-h-screen{min-height:100vh}.flex{display:flex}.flex-col{flex-direction:column}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.p-6{padding:calc(var(--spacing)*6)}.lg\:p-8{padding:calc(var(--spacing)*8)}.px-4{padding-left:calc(var(--spacing)*4);padding-right:calc(var(--spacing)*4)}.py-1\.5{padding-top:calc(var(--spacing)*1.5);padding-bottom:calc(var(--spacing)*1.5)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.gap-2{gap:calc(var(--spacing)*2)}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}.lg\:gap-4{gap:calc(var(--spacing)*4)}.ml-2{margin-left:calc(var(--spacing)*2)}.rounded-sm{border-radius:var(--radius-sm)}.text-sm{font-size:.875rem;line-height:1.25rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.hover\:underline:hover{text-decoration:underline}.transition-all{transition:all .15s cubic-bezier(.4,0,.2,1)}.h-8{height:calc(var(--spacing)*8)}.w-auto{width:auto}.lg\:w-auto{width:auto}.lg\:justify-start{justify-content:flex-start}.lg\:justify-end{justify-content:flex-end}.border{border-width:1px}.px-3{padding-left:calc(var(--spacing)*3);padding-right:calc(var(--spacing)*3)}.py-1{padding-top:calc(var(--spacing)*1);padding-bottom:calc(var(--spacing)*1)}.max-w-xs{max-width:20rem}.lg\:max-w-none{max-width:none}.lg\:flex-row{flex-direction:row}.flex-1{flex:1 1 0%}.lg\:grow{flex-grow:1}.opacity-100{opacity:1}.duration-750{transition-duration:.75s}.starting\:opacity-0{opacity:0}.transition-opacity{transition-property:opacity}.text-2xl{font-size:1.5rem;line-height:2rem}.font-bold{font-weight:700}.mb-4{margin-bottom:calc(var(--spacing)*4)}.leading-relaxed{line-height:1.625}.space-y-4>:not([hidden])~:not([hidden]){margin-top:calc(var(--spacing)*4)}.space-y-3>:not([hidden])~:not([hidden]){margin-top:calc(var(--spacing)*3)}.flex-start{align-items:flex-start}.w-2{width:calc(var(--spacing)*2)}.h-2{height:calc(var(--spacing)*2)}.rounded-full{border-radius:9999px}.mt-2{margin-top:calc(var(--spacing)*2)}.flex-shrink-0{flex-shrink:0}.rounded-lg{border-radius:var(--radius-lg)}}
            @media (prefers-color-scheme:dark){.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{box-shadow:inset 0px 0px 0px 1px #fffaed2d}}
            @media (width>=64rem){.lg\:max-w-4xl{max-width:56rem}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:gap-4{gap:calc(var(--spacing)*4)}.lg\:w-auto{width:auto}.lg\:justify-start{justify-content:flex-start}.lg\:justify-end{justify-content:flex-end}.lg\:max-w-none{max-width:none}.lg\:flex-row{flex-direction:row}.lg\:grow{flex-grow:1}}
        </style>
    @endif
    @stack('styles')
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <!-- Header Navigation -->
    <header class="w-full max-w-[335px] lg:max-w-4xl mb-6">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-4 w-full">
            <div class="flex items-center gap-3 w-full lg:w-auto justify-center lg:justify-start">
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    <img src="{{ asset('ijendriver.png') }}" alt="IjenDriver Logo" class="h-8 w-auto">
                    <span class="font-semibold text-lg text-[#1b1b18] dark:text-[#EDEDEC]">IjenDriver</span>
                </a>
                <nav class="flex gap-2 lg:gap-4 ml-2">
                    <a href="{{ url('/') }}"
                        class="px-4 py-1.5 rounded-sm text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] hover:underline transition-all">
                        Home
                    </a>
                    @auth
                        <a href="#"
                            class="px-4 py-1.5 rounded-sm text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] hover:underline transition-all">
                            Dashboard
                        </a>
                        <a href="#"
                            class="px-4 py-1.5 rounded-sm text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] hover:underline transition-all">
                            Profile
                        </a>
                    @else
                        <a href="{{ url('/tour') }}"
                            class="px-4 py-1.5 rounded-sm text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] hover:underline transition-all">
                            Tour
                        </a>
                        <a href="{{ url('/gallery') }}"
                            class="px-4 py-1.5 rounded-sm text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] hover:underline transition-all">
                            Gallery
                        </a>
                        <a href="{{ url('/blog') }}"
                            class="px-4 py-1.5 rounded-sm text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] hover:underline transition-all">
                            Blog
                        </a>
                    @endauth
                    <a href="{{ route('login') }}"
                        class="px-4 py-1.5 rounded-sm text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] hover:underline transition-all">
                        @auth Logout @else Login @endauth
                    </a>
                </nav>
            </div>
            <div class="w-full lg:w-auto flex justify-center lg:justify-end">
                @auth
                    <div class="flex items-center gap-2 text-sm text-[#706f6c] dark:text-[#A1A09A]">
                        <span>Welcome, {{ Auth::user()->name }}</span>
                    </div>
                @else
                    <select
                        class="border border-[#19140035] dark:border-[#3E3E3A] rounded-sm px-3 py-1 text-sm dark:bg-[#161615] dark:text-[#EDEDEC] w-full max-w-xs lg:max-w-none">
                        <option value="en">English</option>
                        <option value="id">Bahasa Indonesia</option>
                    </select>
                @endauth
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex max-w-[335px] w-full flex-col lg:max-w-4xl lg:flex-row">
            <div class="flex-1 p-6 lg:p-8 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg">
                
                <!-- Flash Messages -->
                @if(session('success'))
                    <div class="mb-4 text-sm text-green-600 bg-green-100 border border-green-300 rounded px-4 py-2">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-4 text-sm text-red-600 bg-[#fff2f2] dark:bg-[#1D0002] border border-red-300 rounded px-4 py-2">
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>

    @stack('scripts')
</body>
</html>
