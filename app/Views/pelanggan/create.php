<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold">
                <i class="bi bi-person-plus-fill text-primary"></i>
                Tambah Pelanggan
            </h2>
            <p class="text-muted mb-0">
                Tambahkan data pelanggan baru BURJO Century
            </p>
        </div>

        <a href="<?= base_url('pelanggan') ?>" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i>
            Kembali
        </a>

    </div>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card border-0 shadow-lg">

                <div class="card-header bg-primary text-white py-3">

                    <h5 class="mb-0">
                        <i class="bi bi-pencil-square"></i>
                        Form Tambah Pelanggan
                    </h5>

                </div>

                <div class="card-body p-4">

                    <form action="<?= base_url('pelanggan/store') ?>" method="post">

                        <?= csrf_field(); ?>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Nama Pelanggan
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-person-fill"></i>
                                </span>

                                <input
                                    type="text"
                                    name="nama"
                                    class="form-control"
                                    placeholder="Masukkan nama pelanggan"
                                    required>

                            </div>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Alamat
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </span>

                                <textarea
                                    name="alamat"
                                    class="form-control"
                                    rows="4"
                                    placeholder="Masukkan alamat pelanggan"
                                    required></textarea>

                            </div>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Nomor Telepon
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-telephone-fill"></i>
                                </span>

                                <input
                                    type="text"
                                    name="telepon"
                                    class="form-control"
                                    placeholder="08xxxxxxxxxx"
                                    required>

                            </div>

                        </div>

                        <hr>

                        <div class="d-flex justify-content-end gap-2">

                            <a href="<?= base_url('pelanggan') ?>" class="btn btn-light px-4">

                                <i class="bi bi-x-circle"></i>

                                Batal

                            </a>

                            <button class="btn btn-primary px-4">

                                <i class="bi bi-save-fill"></i>

                                Simpan Data

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>