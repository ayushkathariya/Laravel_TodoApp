<nav class="flex items-center justify-between">
    <div class="">
        <a href="{{ route('welcome') }}">
            <img src="https://www.floatui.com/logo-dark.svg" width="120" height="50" alt="Float UI logo" />
        </a>
    </div>
    <div>
        @if (Route::has('login'))
            <nav class="flex justify-end flex-1 -mx-3">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</nav>
