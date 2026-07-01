<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="card p-4">

    <h3 class="mb-3">🛒 Keranjang Belanja</h3>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($cart as $item): ?>
            <tr>
                <td><?= $item['name']; ?></td>
                <td>Rp <?= number_format($item['price']); ?></td>

                <td>
                    <form action="/cart/update/<?= $item['id']; ?>" method="post" class="d-flex gap-2">
                        <input type="number" name="qty" value="<?= $item['qty']; ?>" min="1" class="form-control form-control-sm" style="width:80px;">
                        <button class="btn btn-warning btn-sm">Update</button>
                    </form>
                </td>

                <td>
                    Rp <?= number_format($item['price'] * $item['qty']); ?>
                </td>

                <td>
                    <a href="/cart/remove/<?= $item['id']; ?>" class="btn btn-danger btn-sm">
                        Hapus
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h4 class="mt-3">
        Total: <b>Rp <?= number_format($total); ?></b>
    </h4>

    <a href="/cart/clear" class="btn btn-dark mt-2">
        Kosongkan Keranjang
    </a>

</div>

<?= $this->endSection(); ?>