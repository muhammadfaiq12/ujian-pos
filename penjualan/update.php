<?php
if(isset($_POST['update'])) {
    include_once "koneksi.php";
    $id     =$_POST['id'];
    $supplier_id = $_POST['supplier_id'];
    $id = $_POST['total'];

    $sql = "UPDATE penjualan SET 
    supplier_id='$supplier_id',
    total='$total'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location: index.php?n=penjualan');
    } else {
        include 'index.php?n=penjualan';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal ditambahkan")';
        echo '<script>';
    } 
} else {
    echo '<script>window.history.back()</script>';
}