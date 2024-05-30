<?php
$n = (isset($_GET['s'])) ? $_GET['s'] : 'tampil';
switch ($n) {
    case 'tampil';
    default;
        include 'penjualan/tampil.php';
        break;
    case 'tambah';
        include 'penjualan/tambah.php';
        break;
    case 'simpan';
        include 'penjualan/simpan.php';
        break;
    case 'edit';
        include 'edit.php';
        break;
    case 'update';
        include 'update.php';
        break;
    case 'hapus';
        include 'hapus.php';
        break;
}
