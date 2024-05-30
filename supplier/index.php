<?php
$n = (isset($_GET['s'])) ? $_GET['s'] : 'tampil';
switch ($n) {
    case 'tampil';
    default;
        include 'supplier/tampil.php';
        break;
    case 'tambah';
        include 'supplier/tambah.php';
        break;
    case 'simpan';
        include 'supplier/simpan.php';
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
