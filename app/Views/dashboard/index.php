<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Dashboard</h2>
            <p class="text-muted mb-0">
          Selamat datang di Sistem Pengelolaan Burjo.
          Anda dapat mengelola data menu, memantau transaksi penjualan, serta melihat laporan  untuk mendukung pengambilan keputusan yang lebih cepat dan akurat
            </p>
        </div>
    </div>

    <div class="row g-4">

    <!-- Total Menu -->
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="text-muted">Total Menu</div>
                <h2 class="fw-bold text-primary mt-2">
                    <?= $totalMenu ?>
                </h2>
            </div>
        </div>
    </div>

    <!-- Makanan -->
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="text-muted">Makanan</div>
                <h2 class="fw-bold text-success mt-2">
                    <?= $totalMakanan ?>
                </h2>
            </div>
        </div>
    </div>

    <!-- Minuman -->
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="text-muted">Minuman</div>
                <h2 class="fw-bold text-info mt-2">
                    <?= $totalMinuman ?>
                </h2>
            </div>
        </div>
    </div>

    <!-- Total Stok -->
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="text-muted">Total Stok</div>
                <h2 class="fw-bold text-warning mt-2">
                    <?= $totalStok ?>
                </h2>
            </div>
        </div>
    </div>

</div>
    <!-- Welcome Card -->
    <div class="card mt-4">
        <div class="card-body p-4">
            <h4 class="fw-bold">
                Selamat Datang di BURJO Century👋
            </h4>

            <p class="text-muted mb-0">
                Kelola data menu makanan dan minuman dengan lebih mudah.
            </p>
        </div>
    </div>

</div>

<?= $this->endSection() ?> 