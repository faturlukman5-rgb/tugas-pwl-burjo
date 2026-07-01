<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">

<style>

body{

font-family:DejaVu Sans;

font-size:12px;

}

h2{

text-align:center;

margin-bottom:20px;

}

table{

width:100%;

border-collapse:collapse;

}

table th{

background:#2563eb;

color:white;

padding:8px;

border:1px solid black;

}

table td{

padding:8px;

border:1px solid black;

}

</style>

</head>

<body>

<h2>DAFTAR MENU BURJO CENTURY</h2>

<table>

<tr>

<th>No</th>

<th>Nama Menu</th>

<th>Kategori</th>

<th>Harga</th>

<th>Stok</th>

</tr>

<?php $no=1; ?>

<?php foreach($menu as $m): ?>

<tr>

<td><?= $no++ ?></td>

<td><?= $m['nama_menu'] ?></td>

<td><?= $m['kategori'] ?></td>

<td>Rp <?= number_format($m['harga'],0,',','.') ?></td>

<td><?= $m['stok'] ?></td>

</tr>

<?php endforeach; ?>

</table>

</body>

</html>