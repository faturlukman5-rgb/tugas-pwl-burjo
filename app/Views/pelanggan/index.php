<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                <i class="bi bi-people-fill text-primary"></i>
                Data Pelanggan
            </h2>
            <p class="text-muted mb-0">
                Kelola seluruh data pelanggan BURJO Century
            </p>
        </div>

        <a href="<?= base_url('pelanggan/create') ?>" class="btn btn-primary px-4">
            <i class="bi bi-plus-circle"></i>
            Tambah Pelanggan
        </a>

    </div>

    <!-- Alert -->
    <?php if(session()->getFlashdata('success')) : ?>

        <div class="alert alert-success alert-dismissible fade show">

            <i class="bi bi-check-circle-fill"></i>

            <?= session()->getFlashdata('success') ?>

            <button class="btn-close" data-bs-dismiss="alert"></button>

        </div>

    <?php endif; ?>

    <!-- Card Search -->
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-body">

            <form action="<?= base_url('pelanggan') ?>" method="get">

                <div class="row">

                    <div class="col-md-8">

                        <input
                            type="text"
                            class="form-control"
                            name="keyword"
                            placeholder="Cari nama atau nomor telepon..."
                            value="<?= $keyword ?? '' ?>">

                    </div>

                    <div class="col-md-4">

                        <div class="d-flex gap-2">

                            <button class="btn btn-primary w-100">

                                <i class="bi bi-search"></i>

                                Cari

                            </button>

                            <a href="<?= base_url('pelanggan') ?>" class="btn btn-secondary">

                                Reset

                            </a>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

    <!-- Table -->
    <div class="card border-0 shadow">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-primary">

                        <tr>

                            <th width="60">No</th>

                            <th>Nama</th>

                            <th>Alamat</th>

                            <th>No Telepon</th>

                            <th width="180" class="text-center">

                                Aksi

                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php if(empty($pelanggan)) : ?>

                            <tr>

                                <td colspan="5" class="text-center py-5">

                                    <i class="bi bi-inbox fs-1 text-secondary"></i>

                                    <br>

                                    Belum ada data pelanggan.

                                </td>

                            </tr>

                        <?php else : ?>

                            <?php $no=1; ?>

                            <?php foreach($pelanggan as $p) : ?>

                            <tr>

                                <td><?= $no++ ?></td>

                                <td>

                                    <strong>

                                        <?= esc($p['nama']) ?>

                                    </strong>

                                </td>

                                <td>

                                    <?= esc($p['alamat']) ?>

                                </td>

                                <td>

                                    <span class="badge bg-success">

                                        <?= esc($p['telepon']) ?>

                                    </span>

                                </td>

                                <td class="text-center">

                                    <a href="<?= base_url('pelanggan/edit/'.$p['id']) ?>"

                                       class="btn btn-warning btn-sm">

                                        <i class="bi bi-pencil-square"></i>

                                    </a>

                                    <a href="<?= base_url('pelanggan/delete/'.$p['id']) ?>"

                                       onclick="return confirm('Yakin ingin menghapus pelanggan ini?')"

                                       class="btn btn-danger btn-sm">

                                        <i class="bi bi-trash"></i>

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