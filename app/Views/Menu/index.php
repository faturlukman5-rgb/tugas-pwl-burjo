```php
<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid mt-4">

    <!-- Statistik -->
    <div class="row g-4 mb-4">

        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <h6 class="text-muted">Total Menu</h6>
                    <h2 class="fw-bold text-primary"><?= $totalMenu ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <h6 class="text-muted">Makanan</h6>
                    <h2 class="fw-bold text-success"><?= $makanan ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <h6 class="text-muted">Minuman</h6>
                    <h2 class="fw-bold text-info"><?= $minuman ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <h6 class="text-muted">Total Stok</h6>
                    <h2 class="fw-bold text-warning"><?= $totalStok ?></h2>
                </div>
            </div>
        </div>

    </div>

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold text-dark">Daftar Menu Burjo</h2>
    </div>

    <!-- Search -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">

            <form method="get" action="<?= base_url('menu') ?>">
                <div class="row g-2">

                    <div class="col-md-6">
                        <input
                            type="text"
                            name="keyword"
                            class="form-control"
                            placeholder="Cari nama menu atau kategori..."
                            value="<?= $keyword ?? '' ?>">
                    </div>

                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">
                            Cari
                        </button>

                        <a href="<?= base_url('menu') ?>" class="btn btn-secondary">
                            Reset
                        </a>
                    </div>

                </div>
            </form>

        </div>
    </div>

    <!-- Tabel -->
    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th></th>
                            <th>Nama Menu</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if (empty($menu)) : ?>

                            <tr>
                                <td colspan="7" class="text-center">
                                    Data menu tidak ditemukan
                                </td>
                            </tr>

                        <?php else : ?>

                            <?php $no = 1; ?>

                            <?php foreach ($menu as $m) : ?>

                                <tr>

                                    <td><?= $no++; ?></td>

                                    <td>
    
                                    </td>

                                    <td>
                                        <strong><?= $m['nama_menu']; ?></strong>
                                    </td>

                                    <td>
                                        <span class="badge bg-info">
                                            <?= $m['kategori']; ?>
                                        </span>
                                    </td>

                                    <td>
                                        Rp <?= number_format($m['harga'], 0, ',', '.'); ?>
                                    </td>

                                    <td>
                                        <span class="badge bg-success">
                                            <?= $m['stok']; ?>
                                        </span>
                                    </td>

                                    <td>

                                        <a href="<?= base_url('menu/edit/' . $m['id']) ?>"
                                           class="btn btn-outline-warning btn-sm">
                                            Edit
                                        </a>

                                        <a href="<?= base_url('menu/delete/' . $m['id']) ?>"
                                           class="btn btn-outline-danger btn-sm"
                                           onclick="return confirm('Yakin ingin menghapus menu ini?')">
                                            Hapus
                                        </a>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>
```
