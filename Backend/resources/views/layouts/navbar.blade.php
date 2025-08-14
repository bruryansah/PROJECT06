<nav class="navbar">
    <div class="navbar-left">
        <img src="https://smktamansiswa2jakarta.sch.id/wp-content/uploads/2022/03/LOGO-TAMSIS-MATERIAL-DESIGN.png"
            alt="Logo" class="logo" />
        <div class="brand">
            <span class="brand-title">Check</span>
            <span class="brand-subtitle">Tharnsies</span>
        </div>
    </div>
    <ul class="nav-links">
        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Beranda</a></li>
        <li class="{{ request()->is('tentang') ? 'active' : '' }}"><a href="{{ url('/tentang') }}">Tentang</a></li>
        <li class="{{ request()->is('fitur') ? 'active' : '' }}"><a href="{{ url('/fitur') }}">Fitur</a></li>
        <li class="{{ request()->is('kontak') ? 'active' : '' }}"><a href="{{ url('/kontak') }}">Kontak</a></li>
    </ul>
    <div class="auth-buttons">
        <a href="{{ route('login') }}" class="btn-login">Login</a>
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn-register" style="text-decoration:none;">Daftar</a>
        @endif
    </div>
</nav>
