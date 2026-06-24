<div class="navbar bg-base-100 shadow-sm">

    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">

                <a href="/dashboard" class="btn btn-ghost px-2 min-h-[64px] h-auto">
                    <img src="{{ Vite::asset('resources/js/Pictures/logo.png') }}" alt="Logo" class="h-30 w-30 rounded-full object-cover" />
                </a>

                <li><a href="/">Home</a></li>
                @auth
                    <li><a href="/dashboard">Seminarübersicht</a></li>
                @endauth
                @can('view-admin')
                    <li><a href="/admin">Admin</a></li>
                @endcan
            </ul>
        </div>

        <a href="/" class="btn btn-ghost px-2 min-h-[64px] h-auto">
            <img src="{{ Vite::asset('resources/js/Pictures/logo.png') }}" alt="Logo" class="h-30 w-30 rounded-full object-cover" />
        </a>
    </div>

    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/">Home</a></li>
            @auth
                <li><a href="/dashboard">Seminarübersicht</a></li>
            @endauth
            @can('view-admin')
                <li><a href="/admin">Admin</a></li>
            @endcan
        </ul>
    </div>

    <div class="navbar-end space-x-2">
        @guest
            <a class="btn" href="/register">Register</a>
            <a class="btn" href="/login">Log In</a>
        @endguest

        @auth
            <form action="/logout" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-error btn-outline">Log Out</button>
            </form>
        @endauth
    </div>
</div>
