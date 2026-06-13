

<?php $__env->startSection('content'); ?>
<!-- BANNER INTERAKTIF (CAROUSEL) -->
<div id="animalCarousel" class="carousel slide shadow-lg rounded-5 overflow-hidden border border-4 border-hutan" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#animalCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#animalCarousel" data-bs-slide-to="1"></button>
    </div>
    <div class="carousel-inner">
        <!-- Slide 1: Ke Pilihan Satwa -->
        <div class="carousel-item active">
            <div class="d-flex align-items-center justify-content-center text-white" 
                 style="height: 450px; background: linear-gradient(rgba(26, 36, 33, 0.6), rgba(26, 36, 33, 0.6)), url('https://images.unsplash.com/photo-1546182990-dffeafbe841d?auto=format&fit=crop&w=1200&q=80') center/cover;">
                <div class="text-center p-4">
                    <h1 class="display-4 fw-800 text-kuning">Eksplorasi Satwa</h1>
                    <p class="lead mb-4 fw-bold">Temukan berbagai informasi menarik tentang satwa dari seluruh dunia.</p>
                    <a href="/satwa" class="btn btn-oranye btn-lg px-5 rounded-pill shadow fw-800">Lihat Koleksi</a>
                </div>
            </div>
        </div>
        <!-- Slide 2: Ke Kuis -->
        <div class="carousel-item">
            <div class="d-flex align-items-center justify-content-center text-white" 
                 style="height: 450px; background: linear-gradient(rgba(26, 36, 33, 0.6), rgba(26, 36, 33, 0.6)), url('https://images.unsplash.com/photo-1555169062-013468b47731?auto=format&fit=crop&w=1200&q=80') center/cover;">
                <div class="text-center p-4">
                    <h1 class="display-4 fw-800 text-kuning">Uji Wawasanmu</h1>
                    <p class="lead mb-4 fw-bold">Seberapa kenal kamu dengan mereka? Mainkan kuis interaktifnya sekarang!</p>
                    <a href="/kuis" class="btn btn-oranye btn-lg px-5 rounded-pill shadow fw-800">Mulai Kuis</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#animalCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#animalCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- SECTION KATEGORI -->
<div class="mt-5 mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-800 text-hutan m-0">Jelajahi Berdasarkan Habitat</h4>
        <a href="/satwa" class="text-hutan fw-bold text-decoration-none small">Lihat Semua &rarr;</a>
    </div>
    
    <div class="row g-4 text-center">
        <!-- Darat -->
        <div class="col-md-4">
            <a href="/satwa?habitat=darat" class="text-decoration-none">
                <div class="card habitat-card border-0 p-4 bg-hutan h-100 shadow-sm">
                    <div class="fs-1 mb-3">🌳</div>
                    <h5 class="fw-800 text-kuning">Satwa Darat</h5>
                    <p class="text-white small opacity-75">Penghuni hutan, sabana, dan pegunungan.</p>
                </div>
            </a>
        </div>
        <!-- Laut -->
        <div class="col-md-4">
            <a href="/satwa?habitat=laut" class="text-decoration-none">
                <div class="card habitat-card border-0 p-4 bg-hutan h-100 shadow-sm">
                    <div class="fs-1 mb-3">🌊</div>
                    <h5 class="fw-800 text-kuning">Satwa Laut</h5>
                    <p class="text-white small opacity-75">Keajaiban di balik kedalaman samudra.</p>
                </div>
            </a>
        </div>
        <!-- Udara -->
        <div class="col-md-4">
            <a href="/satwa?habitat=udara" class="text-decoration-none">
                <div class="card habitat-card border-0 p-4 bg-hutan h-100 shadow-sm">
                    <div class="fs-1 mb-3">🦅</div>
                    <h5 class="fw-800 text-kuning">Satwa Udara</h5>
                    <p class="text-white small opacity-75">Para penguasa langit yang megah.</p>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- RUNNING TEXT (Horizontal News Ticker) -->
<div class="fact-box shadow-sm rounded-4 mb-4 border border-3 border-hutan">
    <div class="fact-header">
        <i class="bi bi-lightbulb-fill me-2"></i>
        <strong>Tahukah Kamu?</strong>
    </div>
    <div class="fact-content">
        <div class="fact-track">
            <span>Harimau Sumatera punya pola garis yang unik seperti sidik jari manusia.</span>
            <span class="sep">|</span>
            <span>Lidah Paus Biru beratnya bisa mencapai seberat satu ekor gajah!</span>
            <span class="sep">|</span>
            <span>Elang Jawa hanya bertelur satu butir setiap dua tahun sekali.</span>
            <span class="sep">|</span>
            <span>Komodo punya indra penciuman yang tajam hingga jarak 9 kilometer.</span>
            <span class="sep">|</span>
            <span>Harimau Sumatera punya pola garis yang unik seperti sidik jari manusia.</span>
        </div>
    </div>
</div>

<!-- SECTION BERITA SATWA / KONSERVASI -->
<div class="mt-5 pb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-800 text-hutan m-0">Kabar Konservasi Satwa</h4>
        <span class="badge bg-hutan text-kuning px-3 py-2 rounded-pill fw-bold">Update Terkini</span>
    </div>

    <div class="row g-4">
        <!-- Berita 1 -->
        <div class="col-md-6">
            <div class="card news-card border-hutan h-100 shadow-sm">
                <div class="row g-0 h-100">
                    <div class="col-4">
                        <img src="https://images.unsplash.com/photo-1501705388883-4ed8a543392c?auto=format&fit=crop&w=300&q=80" class="w-100 h-100 object-cover" alt="Harimau">
                    </div>
                    <div class="col-8">
                        <div class="card-body bg-kuning-pudar h-100">
                            <h6 class="fw-800 text-hutan mb-1">Harimau Sumatera: Status Kritis</h6>
                            <p class="text-hutan small mb-2 opacity-75">Populasi Harimau Sumatera diperkirakan tersisa kurang dari 400 ekor di alam liar akibat deforestasi.</p>
                            <a href="#" class="btn-link-hutan small fw-bold text-decoration-none">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Berita 2 -->
        <div class="col-md-6">
            <div class="card news-card border-hutan h-100 shadow-sm">
                <div class="row g-0 h-100">
                    <div class="col-4">
                        <img src="https://images.unsplash.com/photo-1437622368342-7a3d73a34c8f?auto=format&fit=crop&w=300&q=80" class="w-100 h-100 object-cover" alt="Penyu">
                    </div>
                    <div class="col-8">
                        <div class="card-body bg-kuning-pudar h-100">
                            <h6 class="fw-800 text-hutan mb-1">Penyu Hijau Terancam Plastik</h6>
                            <p class="text-hutan small mb-2 opacity-75">Sampah plastik di lautan menjadi ancaman serius bagi kelangsungan hidup penyu hijau di Indonesia.</p>
                            <a href="#" class="btn-link-hutan small fw-bold text-decoration-none">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOX INFO TAMBAHAN -->
    <div class="alert bg-oranye border-hutan text-white mt-5 p-4 rounded-5 shadow-sm d-flex align-items-center">
        <div class="fs-1 me-4">💡</div>
        <div>
            <h6 class="fw-800 mb-1 text-hutan">Tahukah Kamu?</h6>
            <p class="mb-0 small fw-bold opacity-90">Indonesia merupakan negara dengan tingkat keanekaragaman hayati tertinggi kedua di dunia, namun juga memiliki daftar satwa terancam punah yang cukup panjang. Mari kita jaga bersama!</p>
        </div>
    </div>
</div>

<style>
    /* THEME UTILS */
    .text-hutan { color: var(--hutan-gelap); }
    .text-kuning { color: var(--kuning-poster); }
    .bg-hutan { background-color: var(--hutan-gelap) !important; }
    .bg-kuning-pudar { background-color: rgba(255, 210, 0, 0.1); }
    .bg-oranye { background-color: var(--oranye-poster) !important; }
    .border-hutan { border: 3px solid var(--hutan-gelap) !important; }
    .fw-800 { font-weight: 800; }
    .rounded-5 { border-radius: 35px !important; }

    /* BUTTONS */
    .btn-oranye { background: var(--oranye-poster); color: white; border: 3px solid var(--hutan-gelap); transition: 0.3s; }
    .btn-oranye:hover { background: var(--kuning-poster); color: var(--hutan-gelap); }
    .btn-link-hutan { color: var(--oranye-poster); }

    /* CARDS */
    .habitat-card {
        border-radius: 30px;
        border: 4px solid var(--hutan-gelap) !important;
        transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .habitat-card:hover { transform: translateY(-10px); background: var(--oranye-poster) !important; }
    .habitat-card:hover .text-kuning { color: white !important; }

    /* NEWS TICKER (Horizontal Anti-Scroll) */
    .fact-box {
        background: var(--hutan-gelap);
        color: var(--kuning-poster);
        height: 50px;
        padding: 0;
        overflow: hidden;
        position: relative;
        display: flex;
        align-items: center;
    }
    .fact-header {
        position: absolute;
        left: 0; top: 0; bottom: 0;
        background: var(--oranye-poster);
        color: var(--hutan-gelap);
        padding: 0 15px;
        display: flex;
        align-items: center;
        z-index: 5;
        font-weight: 800;
        font-size: 0.75rem;
        white-space: nowrap;
    }
    .fact-content { margin-left: 160px; width: 100%; overflow: hidden; white-space: nowrap; display: flex; align-items: center; }
    .fact-track { display: inline-block; white-space: nowrap; animation: scrollLeft 25s linear infinite; }
    .fact-track span { font-size: 1.1rem; font-weight: 700; font-style: italic; padding-right: 30px; line-height: 50px; }
    .sep { color: var(--oranye-poster); margin-right: 30px; }

    @keyframes scrollLeft {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .fact-box:hover .fact-track { animation-play-state: paused; }

    .news-card { border-radius: 20px; overflow: hidden; }
    .object-cover { object-fit: cover; }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Documents\htdocs\info-satwa\resources\views/dashboard.blade.php ENDPATH**/ ?>