<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<style>

.welcome-card{
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
    color:white;
    border-radius:25px;
    padding:40px;
    margin-bottom:30px;
}

.welcome-card h2{
    font-weight:700;
    margin-bottom:10px;
}

.stats-card{
    border:none;
    border-radius:24px;
    overflow:hidden;
    transition:.3s;
    height:100%;
}

.stats-card:hover{
    transform:translateY(-6px);
}

.stats-icon{
    font-size:45px;
    opacity:.25;
}

.stats-number{
    font-size:32px;
    font-weight:700;
}

.quick-card{
    border:none;
    border-radius:24px;
    height:100%;
}

.quick-btn{
    border-radius:14px;
    padding:15px;
    font-weight:600;
}

.activity-item{
    padding:15px 0;
    border-bottom:1px solid #e5e7eb;
}

.activity-item:last-child{
    border-bottom:none;
}

</style>

<div class="container-fluid">

    <!-- WELCOME -->
    <div class="welcome-card">

        <h2>🍜 Dashboard BURJO Century</h2>

        <p class="mb-0">
            Selamat datang di sistem manajemen BURJO Century.
            Kelola menu, stok, dan operasional dengan lebih mudah.
        </p>

    </div>

    <!-- STATISTIK -->
    <div class="row g-4 mb-4">

        <div class="col-lg-3 col-md-6">
            <div class="card stats-card bg-primary text-white">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <small>Total Menu</small>
                        <div class="stats-number">
                            <?= $totalMenu ?>
                        </div>
                    </div>

                    <i class="bi bi-grid-fill stats-icon"></i>

                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card stats-card bg-success text-white">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <small>Total Makanan</small>
                        <div class="stats-number">
                            <?= $totalMakanan ?>
                        </div>
                    </div>

                    <i class="bi bi-cup-hot-fill stats-icon"></i>

                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card stats-card bg-info text-white">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <small>Total Minuman</small>
                        <div class="stats-number">
                            <?= $totalMinuman ?>
                        </div>
                    </div>

                    <i class="bi bi-cup-straw stats-icon"></i>

                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card stats-card bg-warning text-white">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <small>Total Stok</small>
                        <div class="stats-number">
                            <?= $totalStok ?>
                        </div>
                    </div>

                    <i class="bi bi-box-seam-fill stats-icon"></i>

                </div>
            </div>
        </div>

    </div>

    <!-- KONTEN BAWAH -->
    <div class="row g-4">

        <div class="col-lg-6">

            <div class="card quick-card">

                <div class="card-body">

                    <h5 class="fw-bold mb-4">
                        🚀 Akses Cepat
                    </h5>

                    <div class="d-grid gap-3">

                        <a href="<?= base_url('menu') ?>"
                           class="btn btn-outline-primary quick-btn">

                            <i class="bi bi-list-ul"></i>
                            Daftar Menu

                        </a>

                        <a href="<?= base_url('menu/create') ?>"
                           class="btn btn-primary quick-btn">

                            <i class="bi bi-plus-circle"></i>
                            Tambah Menu Baru

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-6">

            <div class="card quick-card">

                <div class="card-body">

                    <h5 class="fw-bold mb-4">
                        📊 Ringkasan
                    </h5>

                    <div class="activity-item">
                        Total Menu :
                        <strong><?= $totalMenu ?></strong>
                    </div>

                    <div class="activity-item">
                        Total Makanan :
                        <strong><?= $totalMakanan ?></strong>
                    </div>

                    <div class="activity-item">
                        Total Minuman :
                        <strong><?= $totalMinuman ?></strong>
                    </div>

                    <div class="activity-item">
                        Total Stok :
                        <strong><?= $totalStok ?></strong>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>