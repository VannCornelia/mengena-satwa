

<?php $__env->startSection('content'); ?>
<div class="dashboard-wrapper">
    
    <div id="animalCarousel" class="carousel slide shadow-lg rounded-5 overflow-hidden border border-4 border-hutan" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#animalCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#animalCarousel" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex align-items-center justify-content-center text-white" 
                     style="height: 400px; background: linear-gradient(rgba(26, 36, 33, 0.6), rgba(26, 36, 33, 0.6)), url('https://images.unsplash.com/photo-1546182990-dffeafbe841d?auto=format&fit=crop&w=1200&q=80') center/cover;">
                    <div class="text-center p-4">
                        <h1 class="display-4 fw-800 text-kuning">SATWA ENDEMIK INDONESIA</h1>
                        <p class="lead mb-4 fw-bold">Eksplorasi fakta ilmiah dan status konservasi 4 satwa langka yang dilindungi.</p>
                        <a href="/satwa" class="btn btn-oranye btn-lg px-5 rounded-pill shadow fw-800">LIHAT DATA ILMIAH</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center text-white" 
                     style="height: 400px; background: linear-gradient(rgba(26, 36, 33, 0.6), rgba(26, 36, 33, 0.6)), url('https://images.unsplash.com/photo-1555169062-013468b47731?auto=format&fit=crop&w=1200&q=80') center/cover;">
                    <div class="text-center p-4">
                        <h1 class="display-4 fw-800 text-kuning">UJI WAWASAN BIOLOGI</h1>
                        <p class="lead mb-4 fw-bold">Seberapa jauh kamu mengetahui status taksonomi dan habitat asli mereka? Mainkan sekarang!</p>
                        <a href="/kuis" class="btn btn-oranye btn-lg px-5 rounded-pill shadow fw-800">MULAI KUIS</a>
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

    <div class="mt-5 mb-4">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <h4 class="fw-800 text-hutan m-0">Taksonomi & Habitat Asli</h4>
            <a href="/satwa" class="text-hutan fw-bold text-decoration-none small">Lihat Semua →</a>
        </div>
        
        <div class="row g-3 text-center mx-0">
            <div class="col-sm-6 col-md-3">
                <a href="/satwa/harimau" class="text-decoration-none">
                    <div class="card habitat-card border-0 p-3 bg-hutan h-100 shadow-sm">
                        <div class="fs-1 mb-2">🐯</div>
                        <h5 class="fw-800 text-kuning mb-1">Harimau Sumatera</h5>
                        <p class="text-white small opacity-75 mb-0">Panthera tigris sumatrae</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="/satwa/jalak-bali" class="text-decoration-none">
                    <div class="card habitat-card border-0 p-3 bg-hutan h-100 shadow-sm">
                        <div class="fs-1 mb-2">🐦</div>
                        <h5 class="fw-800 text-kuning mb-1">Jalak Bali</h5>
                        <p class="text-white small opacity-75 mb-0">Leucopsar rothschildi</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="/satwa/badak" class="text-decoration-none">
                    <div class="card habitat-card border-0 p-3 bg-hutan h-100 shadow-sm">
                        <div class="fs-1 mb-2">🦏</div>
                        <h5 class="fw-800 text-kuning mb-1">Badak Jawa</h5>
                        <p class="text-white small opacity-75 mb-0">Rhinoceros sondaicus</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="/satwa/komodo" class="text-decoration-none">
                    <div class="card habitat-card border-0 p-3 bg-hutan h-100 shadow-sm">
                        <div class="fs-1 mb-2">🦎</div>
                        <h5 class="fw-800 text-kuning mb-1">Komodo</h5>
                        <p class="text-white small opacity-75 mb-0">Varanus komodoensis</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="fact-box shadow-sm rounded-4 mb-4 border border-3 border-hutan">
        <div class="fact-header">
            <i class="bi bi-lightbulb-fill me-2"></i>
            <strong>FAKTA ILMIAH:</strong>
        </div>
        <div class="fact-content">
            <div class="fact-track">
                <span>Harimau Sumatera merupakan subspesies harimau terkecil yang masih hidup di dunia.</span>
                <span class="sep">|</span>
                <span>Jalak Bali adalah satwa endemik pulau Bali yang memiliki ciri khas kelopak mata biru tua.</span>
                <span class="sep">|</span>
                <span>Badak Jawa hanya memiliki satu cula dengan panjang rata-rata sekitar 20 sampai 25 cm.</span>
                <span class="sep">|</span>
                <span>Komodo menggunakan lidahnya yang bercabang untuk mendeteksi partikel rasa di udara.</span>
                <span class="sep">|</span>
            </div>
        </div>
    </div>

    <div class="mt-5 pb-5 mx-0">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-800 text-hutan m-0">Kabar Konservasi Satwa Nasional</h4>
            <span class="badge bg-hutan text-kuning px-3 py-2 rounded-pill fw-bold">Kondisi Riil</span>
        </div>

        <div class="row g-4 mx-0">
            <div class="col-md-6">
                <div class="card news-card border-hutan h-100 shadow-sm">
                    <div class="row g-0 h-100">
                        <div class="col-4">
                            <img src="<?php echo e(asset('img/harimau.JPG')); ?>" class="w-100 h-100 object-cover" alt="Harimau">
                        </div>
                        <div class="col-8">
                            <div class="card-body bg-kuning-pudar h-100">
                                <h6 class="fw-800 text-hutan mb-1">STATUS ANCAMAN PUNAH (CRITICAL)</h6>
                                <p class="text-hutan small mb-2 opacity-75">IUCN mengategorikan Harimau Sumatera dan Badak Jawa ke dalam status Kritis (Critically Endangered) akibat hilangnya habitat hutan alami.</p>
                                <a href="#" class="btn-link-hutan small fw-bold text-decoration-none">BACA JURNAL &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card news-card border-hutan h-100 shadow-sm">
                    <div class="row g-0 h-100">
                        <div class="col-4">
                            <img src="<?php echo e(asset('img/badak.JPG')); ?>" class="w-100 h-100 object-cover" alt="Suaka">
                        </div>
                        <div class="col-8">
                            <div class="card-body bg-kuning-pudar h-100">
                                <h6 class="fw-800 text-hutan mb-1">UPAYA PENANGKARAN IN-SITU</h6>
                                <p class="text-hutan small mb-2 opacity-75">Taman Nasional Ujung Kulon dan Balai Taman Nasional Nasional Bali Barat terus mengoptimalkan metode perlindungan habitat untuk kestabilan populasi.</p>
                                <a href="#" class="btn-link-hutan small fw-bold text-decoration-none">BACA DATA &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert bg-oranye border-hutan text-white mt-5 p-4 rounded-5 shadow-sm d-flex align-items-center">
            <div class="fs-1 me-4">🧬</div>
            <div>
                <h6 class="fw-800 mb-1 text-hutan">Pentingnya Menjaga Keseimbangan Ekosistem:</h6>
                <p class="mb-0 small fw-bold opacity-90">Kehilangan salah satu satwa predator seperti Harimau Sumatera atau satwa penyeimbang lingkungan seperti Badak Jawa dapat memicu kerusakan rantai makanan di hutan hujan tropis Indonesia.</p>
            </div>
        </div>
    </div>
</div>

<style>
    /* FIX LAYOUT & HORIZONTAL SCROLLBAR */
    .dashboard-wrapper {
        width: 100%;
        max-width: 100%;
        overflow-x: hidden;
        padding: 0 5px;
    }

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

    /* CARDS STYLING */
    .habitat-card {
        border-radius: 25px;
        border: 4px solid var(--hutan-gelap) !important;
        transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .habitat-card:hover { transform: translateY(-8px); background: var(--oranye-poster) !important; }
    .habitat-card:hover .text-kuning { color: white !important; }

    /* RUNNING TEXT */
    .fact-box {
        background: var(--hutan-gelap);
        color: var(--kuning-poster);
        height: 50px;
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
    .fact-content { margin-left: 150px; width: 100%; overflow: hidden; white-space: nowrap; display: flex; align-items: center; }
    .fact-track { display: inline-block; white-space: nowrap; animation: scrollLeft 28s linear infinite; }
    .fact-track span { font-size: 1.05rem; font-weight: 700; font-style: italic; padding-right: 35px; line-height: 50px; }
    .sep { color: var(--oranye-poster); margin-right: 35px; }

    @keyframes scrollLeft {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .fact-box:hover .fact-track { animation-play-state: paused; }

    .news-card { border-radius: 20px; overflow: hidden; }
    .object-cover { object-fit: cover; }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\info-satwa\resources\views/dashboard.blade.php ENDPATH**/ ?>