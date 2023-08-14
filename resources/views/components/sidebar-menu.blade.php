<ul class="menu">
    <li class="sidebar-title">Menu</li>
    <x-menu :active="request()->routeIs('dashboard')">
        <a href="{{ route('dashboard') }}" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </x-menu>

    <x-menu :active="request()->routeIs('produk.*')">
        <a href="{{ route('produk.index') }}" class="sidebar-link"> <i class="bi  bi-grid-fill"></i>
            <span>Katalog Produk</span>
        </a>
    </x-menu>

    @auth

        <li class="sidebar-title">Profile</li>
        <x-menu :active="request()->routeIs('profile.*')">
            <a href="{{ route('profile.index',request()->user()->username) }}" class="sidebar-link">
                <i class="bi bi-basket-fill"></i>
                <span>Akun saya </span>
            </a>
        </x-menu>

        <li class="sidebar-title"></li>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-outline-danger">
                <i class="icon-mid bi bi-box-arrow-left"></i>
                <span>Keluar</span>
            </button>
        </form>
    @endauth
    @guest
        <li class="sidebar-title"></li>
        <a href="{{ route('login') }}" class="sidebar-link btn btn-outline-success">
            <i class="bi bi-box-arrow-left"></i>
            <span>Login </span>
        </a>
    @endguest





</ul>
