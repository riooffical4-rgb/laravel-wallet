<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 1 - DompetKu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body { background-color: #f0f2f5; font-family: 'Segoe UI', sans-serif; }
        .ppt-card {
            border: none;
            border-left: 5px solid #4e73df;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .ppt-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        .header-title { color: #4e73df; letter-spacing: 2px; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- NAVBAR MANUAL (Karena tidak pakai layout) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"> DompetKu</a>
            <div class="ms-auto">
                <a href="{{ route('ewallet.index') }}" class="btn btn-outline-light btn-sm rounded-pill">Masuk E-Wallet</a>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <main class="container py-5 flex-grow-1">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold header-title">KELOMPOK 1</h1>
            <p class="lead text-secondary">Projek E-Wallet "DompetKu"</p>
            <div style="width: 60px; height: 4px; background: #4e73df; margin: 0 auto; border-radius: 2px;"></div>
        </div>

        <div class="row justify-content-center g-4">
            @foreach($anggota as $a)
            <div class="col-md-4 col-sm-6">
                <div class="card ppt-card shadow-sm h-100 p-4">
                    <div class="card-body text-center">
                        <!-- Pastikan kolom 'nama' sesuai migration -->
                        <h4 class="fw-bold mb-2 text-dark">{{ $a->nama_anggota }}</h4>
                        <p class="text-primary fw-semibold fs-5 mb-2">{{ $a->nim }}</p>
                        <span class="badge bg-light text-secondary border px-3 py-2 rounded-pill fs-6">
                            {{ $a->jurusan }}
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <!-- FOOTER MANUAL -->
    <footer class="bg-white border-top py-4 mt-auto">
        <div class="container text-center text-muted small">
            &copy; 2026 Kelompok 1 - Laravel Project
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>