

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <!-- Tombol Kembali dengan gaya Hutan Gelap -->
    <a href="/satwa" class="btn btn-hutan-outline mb-4">
        <i class="bi bi-arrow-left me-2"></i>Kembali ke Daftar
    </a>

    <div class="row">
        <!-- Bagian Foto & Fakta Unik (Kiri) -->
        <div class="col-md-5">
            <div class="sticky-md-top" style="top: 100px;">
                <img src="<?php echo e(asset('img/' . $animal->gambar)); ?>" class="img-fluid rounded-5 shadow-lg border border-4 border-hutan" alt="<?php echo e($animal->nama); ?>">
            </div>
        </div>

        <!-- Bagian Informasi (Kanan) -->
        <div class="col-md-7">
            <h1 class="fw-800 text-hutan display-5 mb-1"><?php echo e(strtoupper($animal->nama)); ?></h1>
            <p class="text-oranye fw-bold fs-5 mb-4 text-uppercase" style="letter-spacing: 2px;">
                <i class="bi bi-tree-fill me-2"></i>Habitat: Satwa <?php echo e($animal->habitat); ?>

            </p>

            <div class="row g-3 mb-4">
                <div class="col-6">
                    <div class="p-3 bg-white rounded-4 shadow-sm border-bottom border-hutan border-4">
                        <small class="text-muted d-block text-uppercase fw-bold" style="font-size: 0.7rem;">Asal / Lokasi</small>
                        <span class="fw-bold text-hutan"><?php echo e($animal->asal); ?></span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 bg-hutan rounded-4 shadow-sm border-bottom border-oranye border-4 text-kuning">
                        <small class="text-white text-opacity-75 d-block text-uppercase fw-bold" style="font-size: 0.7rem;">Sisa Populasi</small>
                        <span class="fw-bold"><?php echo e($animal->populasi); ?></span>
                    </div>
                </div>
            </div>

            <div class="p-4 bg-white bg-opacity-50 rounded-5 mb-4">
                <h5 class="fw-800 text-hutan mb-3">DESKRIPSI HEWAN</h5>
                <p class="text-hutan lh-lg mb-0">
                    <?php echo e($animal->deskripsi); ?>

                </p>
            </div>

            <!-- Bagian Video -->
            <div class="mt-5">
                <h5 class="fw-800 text-hutan mb-3"><i class="bi bi-play-circle-fill me-2 text-oranye"></i>CUPLIKAN DI ALAM LIAR</h5>
                
                <?php if($animal->video_url): ?>
                    <div class="shadow-lg rounded-5 overflow-hidden border border-4 border-hutan">
                        <div class="ratio ratio-16x9">
                            <iframe src="<?php echo e($animal->video_url); ?>" 
                                    title="YouTube video player" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <p class="text-hutan small mt-2 opacity-75">*Sumber: Dokumentasi Konservasi Satwa (YouTube)</p>
                <?php else: ?>
                    <div class="alert bg-hutan text-white text-center py-5 rounded-5 border-0">
                        <i class="bi bi-camera-video-off fs-2 mb-2 d-block"></i>
                        <span class="small italic">Video untuk satwa ini sedang dalam perjalanan...</span>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Status Konservasi dengan gaya Poster -->
            <div class="p-4 bg-oranye text-white mt-5 rounded-5 shadow-sm border border-4 border-hutan">
                <h6 class="fw-800 mb-2"><i class="bi bi-shield-fill-check me-2"></i>STATUS KONSERVASI</h6>
                <p class="small mb-0 fw-500">Satwa ini masuk ke dalam daftar merah (Red List) IUCN. Mari kita bersama-sama mendukung upaya konservasi untuk mencegah kepunahan mereka.</p>
            </div>
        </div>
    </div>
</div>

<style>
    /* Tambahan CSS khusus Detail agar sinkron dengan Poster */
    .text-hutan { color: var(--hutan-gelap) !important; }
    .text-oranye { color: var(--hijau-moss) !important; }
    .text-kuning { color: var(--kuning-poster) !important; }
    .bg-hutan { background-color: var(--hutan-gelap) !important; }
    .bg-oranye { background-color: var(--oranye-poster) !important; }
    .border-hutan { border-color: var(--hutan-gelap) !important; }
    .border-oranye { border-color: var(--oranye-poster) !important; }
    .fw-800 { font-weight: 800; }
    .italic { font-style: italic; }

    .btn-hutan-outline {
        border: 3px solid var(--hutan-gelap);
        color: var(--hutan-gelap);
        font-weight: 800;
        border-radius: 50px;
        padding: 8px 25px;
        text-transform: uppercase;
        font-size: 0.8rem;
        transition: 0.3s;
    }

    .btn-hutan-outline:hover {
        background-color: var(--hutan-gelap);
        color: var(--kuning-poster);
    }

    .rounded-5 { border-radius: 30px !important; }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Documents\htdocs\info-satwa\resources\views/satwa_detail.blade.php ENDPATH**/ ?>