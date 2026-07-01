<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold">
                <i class="bi bi-pencil-square text-warning"></i>
                Edit Pelanggan
            </h2>
            <p class="text-muted mb-0">
                Ubah data pelanggan BURJO Century
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

                <div class="card-header bg-warning text-dark py-3">

                    <h5 class="mb-0">
                        <i class="bi bi-person-gear"></i>
                        Form Edit Pelanggan
                    </h5>

                </div>

                <div class="card-body p-4">

                    <form action="<?= base_url('pelanggan/update/'.$pelanggan['id']) ?>" method="post">

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
                                    value="<?= esc($pelanggan['nama']) ?>"
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
                                    required><?= esc($pelanggan['alamat']) ?></textarea>

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
                                    value="<?= esc($pelanggan['telepon']) ?>"
                                    required>

                            </div>

                        </div>

                        <hr>

                        <div class="d-flex justify-content-end gap-2">

                            <a href="<?= base_url('pelanggan') ?>" class="btn btn-light px-4">
                                <i class="bi bi-x-circle"></i>
                                Batal
                            </a>

                            <button type="submit" class="btn btn-warning px-4">
                                <i class="bi bi-check-circle-fill"></i>
                                Update Data
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>