

<?php $__env->startSection('content'); ?>
<div class="mb-5 text-center text-md-start">
    <h2 class="fw-800 text-hutan mb-1" style="letter-spacing: -1px;">TIM PENGEMBANG PMM</h2>
    <p class="text-hutan opacity-75 fw-bold">Kelompok Mahasiswa Universitas Pendidikan Indonesia - Kampus Cibiru</p>
</div>

<div class="row g-4 pb-5">
    <!-- Loop untuk Personil (Gunakan struktur ini untuk ke-4 anggota) -->
    <div class="col-md-3 col-sm-6">
        <div class="card h-100 team-card shadow-lg">
            <div class="photo-wrapper p-3">
                <img src="<?php echo e(asset('img/ergi.JPG')); ?>" class="w-100 rounded-4" alt="Ergi">
            </div>
            <div class="card-body d-flex flex-column pt-0 text-center">
                <h5 class="fw-800 text-kuning mb-1"><?php echo e(strtoupper('Muhammad Ergi')); ?></h5>
                <p class="text-white small fw-bold opacity-75 mb-3">Project Manager</p>
                
                <div class="info-box p-3 rounded-4 mt-auto">
                    <div class="d-flex justify-content-between mb-1 small">
                        <span class="text-white opacity-75">NIM</span>
                        <span class="fw-bold text-kuning">2403608</span>
                    </div>
                    <hr class="my-2 border-white opacity-25">
                    <p class="mb-0 small fw-600 text-white italic">"Mengatur Segala Projek"</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card h-100 team-card shadow-lg">
            <div class="photo-wrapper p-3">
                <img src="<?php echo e(asset('img/upi.JPG')); ?>" class="w-100 rounded-4" alt="Ergi">
            </div>
            <div class="card-body d-flex flex-column pt-0 text-center">
                <h5 class="fw-800 text-kuning mb-1"><?php echo e(strtoupper('Lutfhiani Fauziah')); ?></h5>
                <p class="text-white small fw-bold opacity-75 mb-3">Content Researcher</p>
                
                <div class="info-box p-3 rounded-4 mt-auto">
                    <div class="d-flex justify-content-between mb-1 small">
                        <span class="text-white opacity-75">NIM</span>
                        <span class="fw-bold text-kuning">2403070</span>
                    </div>
                    <hr class="my-2 border-white opacity-25">
                    <p class="mb-0 small fw-600 text-white italic">"Menyusun Konten & Referensi"</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card h-100 team-card shadow-lg">
            <div class="photo-wrapper p-3">
                <img src="<?php echo e(asset('img/arip.JPG')); ?>" class="w-100 rounded-4" alt="Ergi">
            </div>
            <div class="card-body d-flex flex-column pt-0 text-center">
                <h5 class="fw-800 text-kuning mb-1"><?php echo e(strtoupper('Muhamad Arief Nur Cahyo')); ?></h5>
                <p class="text-white small fw-bold opacity-75 mb-3">Web Developer</p>
                
                <div class="info-box p-3 rounded-4 mt-auto">
                    <div class="d-flex justify-content-between mb-1 small">
                        <span class="text-white opacity-75">NIM</span>
                        <span class="fw-bold text-kuning">2404780</span>
                    </div>
                    <hr class="my-2 border-white opacity-25">
                    <p class="mb-0 small fw-600 text-white italic">"Pengembangan Website"</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card h-100 team-card shadow-lg">
            <div class="photo-wrapper p-3">
                <img src="<?php echo e(asset('img/rezky.JPG')); ?>" class="w-100 rounded-4" alt="Ergi">
            </div>
            <div class="card-body d-flex flex-column pt-0 text-center">
                <h5 class="fw-800 text-kuning mb-1"><?php echo e(strtoupper('M. Rezky Rahmawan')); ?></h5>
                <p class="text-white small fw-bold opacity-75 mb-3">Graphic Designer</p>
                
                <div class="info-box p-3 rounded-4 mt-auto">
                    <div class="d-flex justify-content-between mb-1 small">
                        <span class="text-white opacity-75">NIM</span>
                        <span class="fw-bold text-kuning">2410439</span>
                    </div>
                    <hr class="my-2 border-white opacity-25">
                    <p class="mb-0 small fw-600 text-white italic">"Desain Visual & Multimedia"</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ... Ulangi untuk Lutfhiani, Arief, dan Rezky ... -->
</div>

<style>
    /* Variabel Warna Utama */
    .text-hutan { color: var(--hutan-gelap); }
    .text-kuning { color: var(--kuning-poster); }
    .fw-800 { font-weight: 800; }

    .team-card {
        /* Mengubah background card menjadi Hijau Moss */
        background-color: var(--hijau-moss) !important; 
        border-radius: 35px !important;
        border: 4px solid var(--hutan-gelap) !important;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .team-card:hover {
        transform: translateY(-15px) rotate(2deg); /* Tambah sedikit rotasi biar dinamis */
        box-shadow: 0 25px 50px rgba(0,0,0,0.3) !important;
        border-color: var(--oranye-poster) !important;
    }

    .photo-wrapper img {
        border: 3px solid var(--hutan-gelap);
        background: white;
        transition: 0.3s;
    }

    .team-card:hover .photo-wrapper img {
        border-color: var(--kuning-poster);
        transform: scale(1.02);
    }

    /* Box NIM dan Job Desk */
    .info-box {
        background-color: rgba(26, 36, 33, 0.5); /* Hijau sangat gelap transparan */
        border: 2px dashed var(--oranye-poster);
    }

    img {
        object-fit: cover;
        aspect-ratio: 3/4;
    }

    .italic { font-style: italic; }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\info-satwa\resources\views/profile.blade.php ENDPATH**/ ?>