<?php
if(isset($_POST['simpan'])) {
    include_once "koneksi.php";
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];

    $sql = "INSERT INTO supplier SET 
    nama='$nama',
    alamat='$alamat',
    kontak='$kontak'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location: index.php?n=supplier');
    } else {
        include 'index.php?n=supplier';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal ditambahkan")';
        echo '<script>';
    } 
} else {
    echo '<script>window.history.back()</script>';
}