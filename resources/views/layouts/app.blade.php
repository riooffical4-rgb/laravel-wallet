<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DompetKu - Projek Kelompok 1')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts (Opsional, biar lebih modern) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        .navbar-brand { font-weight: 700; letter-spacing: -0.5px; }
        main { min-height: calc(100vh - 160px); } /* Agar footer selalu di bawah */
    </style>
    
    @stack('styles')
</head>
<body>

    <!-- Navbar Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('kelompok.index') }}">
                💳 DompetKu
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('kelompok.*') ? 'active' : '' }}" 
                           href="{{ route('kelompok.index') }}">
                           👥 Profil Kelompok
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('ewallet.*') ? 'active' : '' }}" 
                           href="{{ route('ewallet.index') }}">
                           📊 Dashboard E-Wallet
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama (Diisi oleh @yield('content')) -->
    <main class="container pb-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-top py-4 mt-auto">
        <div class="container text-center text-muted small">
            &copy; 2026 Kelompok 1 - Projek E-Wallet Kampus | Laravel 11
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>