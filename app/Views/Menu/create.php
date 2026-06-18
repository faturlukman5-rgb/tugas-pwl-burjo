```php
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card border-0 shadow-lg rounded-4">

                <div class="card-header bg-primary text-white rounded-top-4">
                    <h3 class="mb-0">
                        <i class="bi bi-plus-circle"></i>
                        Tambah Menu Baru
                    </h3>
                </div>

                <div class="card-body p-4">

                    <form action="<?= base_url('menu/store') ?>"
                          method="post"
                          enctype="multipart/form-data">

                        <!-- Nama Menu -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Nama Menu
                            </label>

                            <input type="text"
                                   name="nama_menu"
                                   class="form-control form-control-lg"
                                   placeholder="Masukkan nama menu"
                                   required>
                        </div>

                        <!-- Kategori -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Kategori
                            </label>

                            <select name="kategori"
                                    class="form-select form-select-lg"
                                    required>

                                <option value="">Pilih Kategori</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>

                            </select>
                        </div>

                        <!-- Harga -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Harga
                            </label>

                            <input type="number"
                                   name="harga"
                                   class="form-control form-control-lg"
                                   placeholder="Masukkan harga"
                                   required>
                        </div>

                        <!-- Stok -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Stok
                            </label>

                            <input type="number"
                                   name="stok"
                                   class="form-control form-control-lg"
                                   placeholder="Masukkan stok"
                                   required>
                        </div>

                        

                        

                            <button type="submit"
                                    class="btn btn-primary px-4">
                                <i class="bi bi-save"></i>
                                Simpan
                            </button>

                            <a href="<?= base_url('menu') ?>"
                               class="btn btn-secondary px-4">
                                <i class="bi bi-arrow-left"></i>
                                Kembali
                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script>
function previewImage(event)
{
    const file = event.target.files[0];

    if (!file) return;

    const reader = new FileReader();

    reader.onload = function(e)
    {
        document.getElementById('preview').src = e.target.result;
    };

    reader.readAsDataURL(file);
}
</script>

<?= $this->endSection() ?>
```
