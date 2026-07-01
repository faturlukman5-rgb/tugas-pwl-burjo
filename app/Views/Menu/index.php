```php
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<style>

.hero-section{
    background:linear-gradient(135deg,#1e3a8a,#2563eb);
    color:white;
    padding:35px;
    border-radius:25px;
    margin-bottom:30px;
}

.hero-section h2{
    font-weight:700;
}

.stat-box{
    background:white;
    border-radius:20px;
    padding:20px;
    text-align:center;
    box-shadow:0 5px 20px rgba(0,0,0,.06);
    height:100%;
}

.stat-box h3{
    font-weight:700;
    margin:0;
}

.stat-box p{
    margin:0;
    color:#64748b;
}

.menu-card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,.06);
    transition:.3s;
}

.menu-card:hover{
    transform:translateY(-5px);
}

.menu-price{
    color:#2563eb;
    font-weight:700;
    font-size:20px;
}

.menu-stock{
    font-size:14px;
}

.search-box{
    background:white;
    padding:20px;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,.06);
    margin-bottom:25px;
}

.badge-food{
    background:#dbeafe;
    color:#1e40af;
}

.badge-drink{
    background:#dcfce7;
    color:#166534;
}

</style>

<div class="container-fluid">

   

    <!-- STATISTIK -->
    <div class="row g-4 mb-4">

        <div class="col-md-3">
            <div class="stat-box">
                <h3><?= $totalMenu ?></h3>
                <p>Total Menu</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-box">
                <h3><?= $makanan ?></h3>
                <p>Makanan</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-box">
                <h3><?= $minuman ?></h3>
                <p>Minuman</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-box">
                <h3><?= $totalStok ?></h3>
                <p>Total Stok</p>
            </div>
        </div>

    </div>

   

    <!-- CARD MENU -->
    <div class="row g-4">

        <?php if(empty($menu)): ?>

           

        <?php else: ?>

            <?php foreach($menu as $m): ?>

            <div class="col-lg-4 col-md-6">

                <div class="card menu-card">

                    <div class="card-body">

                        <div class="d-flex justify-content-between">

                            <h5 class="fw-bold">
                                <?= $m['nama_menu'] ?>
                            </h5>

                            <?php if($m['kategori']=='Makanan'): ?>
                                <span class="badge badge-food">
                                    Makanan
                                </span>
                            <?php else: ?>
                                <span class="badge badge-drink">
                                    Minuman
                                </span>
                            <?php endif; ?>

                        </div>

                        <div class="menu-price mt-3">
                            Rp <?= number_format($m['harga'],0,',','.') ?>
                        </div>

                        <div class="menu-stock mt-2">
                            Stok tersedia :
                            <strong><?= $m['stok'] ?></strong>
                        </div>

                        <hr>

                        <div class="d-flex gap-2">

                            <a href="<?= base_url('menu/edit/'.$m['id']) ?>"
                               class="btn btn-warning flex-fill">
                                <i class="bi bi-pencil"></i>
                                Edit
                            </a>

                            <a href="<?= base_url('menu/delete/'.$m['id']) ?>"
                               onclick="return confirm('Yakin ingin menghapus menu ini?')"
                               class="btn btn-danger flex-fill">
                                <i class="bi bi-trash"></i>
                                Hapus
                            </a>

                          <a href="/cart/add/<?= $m['id']; ?>" class="btn btn-primary btn-sm mt-2">
  
    Tambah ke Keranjang
</a>

<a href="<?= base_url('menu/pdf') ?>"
class="btn btn-danger">

<i class="bi bi-file-earmark-pdf-fill"></i>

Cetak PDF

</a>
                        </div>

                    </div>

                </div>

            </div>

            <?php endforeach; ?>

        <?php endif; ?>

    </div>

</div>

<?= $this->endSection() ?>
```

</form>