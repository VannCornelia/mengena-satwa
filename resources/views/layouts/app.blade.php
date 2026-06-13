<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinta Satwa - Mengenal Satwa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
<style>
    :root {
        --hutan-gelap: #1A2421;    /* Background Sidebar & Footer */
        --hijau-moss: #4A5D23;     /* Latar Belakang Utama (Pengganti Putih) */
        --kuning-poster: #FFD200;  /* Konten Area */
        --oranye-poster: #F39200;  /* Header & Aksen */
        --teks-gelap: #1B1F13;     /* Warna Teks Utama */
        --kuning-cerah: #FFD200;
    }

    body { 
        font-family: 'Montserrat', sans-serif; 
        /* Mengubah total latar belakang menjadi hijau moss */
        background-color: var(--hijau-moss); 
        color: var(--teks-gelap);
        margin: 0;
    }

    /* Sidebar - Nuansa Hutan Gelap */
    .sidebar { 
        height: 100vh; 
        width: 240px; 
        background: var(--hutan-gelap); 
        color: white; 
        position: sticky; 
        top: 0; 
        flex-shrink: 0;
        overflow-y: auto;
        border-right: 5px solid var(--oranye-poster);
    }

    .sidebar a { 
        color: rgba(255,255,255,0.7); 
        text-decoration: none; 
        display: block; 
        padding: 15px 25px; 
        transition: 0.3s; 
    }

    .sidebar a:hover { 
        background: rgba(243, 146, 0, 0.2); 
        color: var(--kuning-poster); 
    }

    /* Main Content Wrapper */
    .main-wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        width: 100%;
        background-color: var(--hijau-moss);
    }

    /* Area Konten Utama - Mengganti Putih menjadi Kuning Poster */
    .content-area {
        flex: 1;
        background-color: var(--kuning-poster); 
        margin: 25px;
        border-radius: 40px; /* Sudut membulat besar khas poster */
        box-shadow: 15px 15px 0px rgba(0,0,0,0.15); /* Shadow tegas seperti gaya desain grafis */
        overflow: hidden;
        border: 3px solid var(--hutan-gelap);
    }

    /* Header / Topbar - Mengganti Putih menjadi Oranye */
    .sticky-top-header {
        background: var(--oranye-poster) !important;
        padding: 1.2rem 3rem;
        border-bottom: 5px solid var(--hutan-gelap);
        color: var(--hutan-gelap);
    }

    /* Badge PMM - Menggunakan Hijau Gelap agar Kontras */
    .badge-pmm {
        background-color: var(--hutan-gelap);
        color: var(--kuning-poster);
        font-weight: 800;
        border-radius: 50px;
        padding: 10px 25px;
        text-transform: uppercase;
        font-size: 0.8rem;
    }

    /* Footer - Mengganti Putih menjadi Hijau Gelap */
    footer {
        background: var(--hutan-gelap);
        color: white;
        padding: 2rem 0;
        margin-top: 20px;
        border-top: 5px solid var(--oranye-poster);
    }

    footer .text-muted {
        color: rgba(255,255,255,0.5) !important;
    }

    /* Link Sidebar Aktif */
    .active-link { 
        background: var(--oranye-poster) !important; 
        color: white !important; 
        font-weight: bold;
    }

    /* Penyesuaian judul di sidebar */
    .sidebar-brand {
        color: var(--kuning-cerah);
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
</style>
</head>
<body>
    <div class="d-flex align-items-start">
        <!-- Sidebar -->
        <div class="sidebar shadow">
            <div class="p-4 text-center border-bottom border-secondary">
                <h4 class="sidebar-brand mb-0">CINTA SATWA</h4>
            </div>
            <nav class="mt-3">
                <a href="/" class="{{ Request::is('/') ? 'active-link' : '' }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
                <a href="/satwa" class="{{ Request::is('satwa*') ? 'active-link' : '' }}">
                    <i class="bi bi-search me-2"></i> Pilihan Satwa
                </a>
                <a href="/kuis" class="{{ Request::is('kuis') ? 'active-link' : '' }}">
                    <i class="bi bi-controller me-2"></i> Kuis Interaktif
                </a>
                <a href="/profile" class="{{ Request::is('profile') ? 'active-link' : '' }}">
                    <i class="bi bi-people me-2"></i> Profil Tim
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-wrapper">
            <div class="content-area">
                <!-- Header / Topbar Berwarna Oranye -->
                <div class="sticky-top-header d-flex justify-content-between align-items-center sticky-top">
                    <h5 class="fw-800 mb-0">PORTAL EDUKASI SATWA</h5>
                    <span class="badge-pmm shadow-sm">PMM UPI - 2026</span>
                </div>
                
                <!-- Kontainer Konten (Latar Kuning) -->
                <div class="container-fluid p-4 p-md-5"> 
                    @yield('content')
                </div>
            </div>

            <!-- Footer Berwarna Hijau Gelap -->
            <footer>
                <div class="container-fluid px-5">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small">
                        <div>
                            &copy; 2026 <strong style="color: var(--kuning-poster)">Cinta Satwa</strong>. 
                            <span class="text-muted ms-md-2">Inovasi Media Pembelajaran Pendidikan Multimedia UPI.</span>
                        </div>
                        <div class="fw-bold mt-2 mt-md-0">
                            VERSI 1.0
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</body>
</html>