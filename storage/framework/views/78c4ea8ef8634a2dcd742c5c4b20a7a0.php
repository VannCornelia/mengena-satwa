

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-5">
    <h2 class="fw-800 text-hutan mb-0" style="letter-spacing: -1px;">PILIHAN SATWA</h2>
    
    <!-- Group Filter Habitat yang disesuaikan warnanya -->
    <div class="btn-group shadow-sm filter-habitat">
        <a href="/satwa" class="btn <?php echo e(!request('habitat') ? 'btn-active' : 'btn-outline-hutan'); ?>">Semua</a>
        <a href="/satwa?habitat=darat" class="btn <?php echo e(request('habitat') == 'darat' ? 'btn-active' : 'btn-outline-hutan'); ?>">Darat</a>
        <a href="/satwa?habitat=laut" class="btn <?php echo e(request('habitat') == 'laut' ? 'btn-active' : 'btn-outline-hutan'); ?>">Laut</a>
        <a href="/satwa?habitat=udara" class="btn <?php echo e(request('habitat') == 'udara' ? 'btn-active' : 'btn-outline-hutan'); ?>">Udara</a>
    </div>
</div>

<div class="row g-4"> 
    <?php $__empty_1 = true; $__currentLoopData = $dataSatwa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-md-4 col-sm-6">
        <div class="card h-100 animal-card shadow-lg">
            <div class="position-relative overflow-hidden" style="height: 220px;">
                <img src="<?php echo e(asset('img/' . $animal->gambar)); ?>" class="w-100 h-100 object-cover" alt="<?php echo e($animal->nama); ?>">
                
                <!-- Overlay LIHAT DETAIL Berwarna Oranye -->
                <div class="card-hover-overlay d-flex align-items-center justify-content-center">
                    <a href="/satwa/<?php echo e($animal->id); ?>" class="btn btn-detail shadow-sm">
                        LIHAT DETAIL <i class="bi bi-arrow-right-short"></i>
                    </a>
                </div>
            </div>
            
            <!-- Body Card dengan Background Hijau Gelap agar Teks Kuning Menyala -->
            <div class="card-body text-center p-4">
                <h5 class="card-title mb-1"><?php echo e($animal->nama); ?></h5>
                <div class="habitat-label">
                    <i class="bi bi-geo-alt-fill me-1"></i> Satwa <?php echo e($animal->habitat); ?>

                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="col-12 text-center py-5">
        <div class="alert bg-white border-dashed rounded-4 py-5 shadow-sm">
            <i class="bi bi-search fs-1 text-muted mb-3 d-block"></i>
            <p class="text-muted fw-bold">Ups! Belum ada satwa di kategori ini.</p>
        </div>
    </div>
    <?php endif; ?>
</div>

<style>
    /* Styling Heading */
    .text-hutan { color: var(--hutan-gelap); font-weight: 800; }

    /* Button Group Custom Style */
    .filter-habitat .btn {
        padding: 10px 25px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.8rem;
        transition: 0.3s;
        border: 2px solid var(--hutan-gelap);
    }
    .btn-outline-hutan {
        background: transparent;
        color: var(--hutan-gelap);
    }
    .btn-active {
        background: var(--oranye-poster) !important;
        color: white !important;
        border-color: var(--hutan-gelap) !important;
    }

    /* Animal Card Design */
    .animal-card {
        border-radius: 25px !important;
        border: 4px solid var(--hutan-gelap) !important;
        background: var(--hutan-gelap) !important;
        transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        overflow: hidden;
    }
    .animal-card:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2) !important;
    }
    .animal-card .card-title {
        color: var(--kuning-poster);
        font-weight: 800;
        letter-spacing: -0.5px;
        font-size: 1.3rem;
    }
    .habitat-label {
        color: var(--oranye-poster);
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 1px;
    }

    /* Detail Overlay */
    .card-hover-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(26, 36, 33, 0.6); /* Transparansi hijau gelap */
        opacity: 0;
        transition: 0.3s;
        backdrop-filter: blur(3px);
    }
    .animal-card:hover .card-hover-overlay {
        opacity: 1;
    }
    .btn-detail {
        background: var(--oranye-poster);
        color: white;
        font-weight: 800;
        border-radius: 50px;
        padding: 8px 20px;
        border: 2px solid var(--hutan-gelap);
        font-size: 0.8rem;
    }
    .btn-detail:hover {
        background: var(--kuning-poster);
        color: var(--hutan-gelap);
    }

    .object-cover { object-fit: cover; }
    .fw-800 { font-weight: 800; }
    .border-dashed { border: 2px dashed #ddd; }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Documents\htdocs\info-satwa\resources\views/satwa.blade.php ENDPATH**/ ?>