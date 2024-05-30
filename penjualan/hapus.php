<?php
if(isset($_GET['id'])) {
    include_once "koneksi.php";
    $id = $_GET['id'];
    $sql = "DELETE from penjualan WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        //var_dump($sql);
        header('Location: index.php?n=penjualan');
    } else {
        include 'index.php?n=penjualan';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal dihapus")';
        echo '<script>';
    } 
} else {
    echo '<script>window.history.back()</script>';
}