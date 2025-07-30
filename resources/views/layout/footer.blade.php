<footer class="w-full max-w-[335px] lg:max-w-4xl mb-6">
    <div class="flex flex-col lg:flex-row items-center justify-between gap-4 w-full">
        <div class="flex items-center gap-3 w-full lg:w-auto justify-center lg:justify-start">
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <img src="{{ asset('IjenDriver.png') }}" alt="IjenDriver Logo" class="h-8 w-auto">
                <span class="font-semibold text-lg text-[#1b1b18] dark:text-[#EDEDEC]"></span>
            </a>
            <nav class="flex gap-2 lg:gap-4 ml-2">
                <a href="{{ url('/') }}"
                    class="px-4 py-1.5 rounded-sm text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] hover:underline transition-all">
                    Home
                </a>
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
                <a href="{{ url('/login') }}"
                    class="px-4 py-1.5 rounded-sm text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] hover:underline transition-all">
                    Login
                </a>
            </nav>
        </div>
        <div class="w-full lg:w-auto flex justify-center lg:justify-end">
            <select
                class="border border-[#19140035] dark:border-[#3E3E3A] rounded-sm px-3 py-1 text-sm dark:bg-[#161615] dark:text-[#EDEDEC] w-full max-w-xs lg:max-w-none">
                <option value="en">English</option>
                <option value="id">Bahasa Indonesia</option>
            </select>
        </div>
    </div>
</footer>
