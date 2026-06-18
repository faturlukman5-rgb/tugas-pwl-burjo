<h2>Edit Menu</h2>

<form action="/menu/update/<?= $menu['id']; ?>" method="post">

<input type="text"
name="nama_menu"
value="<?= $menu['nama_menu']; ?>">

<select name="kategori">

<option value="Makanan"
<?= ($menu['kategori']=='Makanan')?'selected':''; ?>>
Makanan
</option>

<option value="Minuman"
<?= ($menu['kategori']=='Minuman')?'selected':''; ?>>
Minuman
</option>

</select>

<input type="number"
name="harga"
value="<?= $menu['harga']; ?>">

<input type="number"
name="stok"
value="<?= $menu['stok']; ?>">

<button type="submit">
Update
</button>

</form>