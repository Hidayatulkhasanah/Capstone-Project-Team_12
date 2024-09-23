<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto">
            <a href="/">
                <img src="C:\laragon\www\Project-Skripsi\public\assets\img\logo.png" alt="">
                Nagara Puntang
            </a>
        </h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/">Beranda</a></li>
                <li><a class="nav-link scrollto" href="{{ route('package') }}">Paket Wisata</a></li>
                <li><a class="nav-link" href="{{ route('invoice.index') }}">Cari Invoice</a></li>
                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
<footer>
    
</footer>
<!-- Modal -->
@include('landingpage.modal')