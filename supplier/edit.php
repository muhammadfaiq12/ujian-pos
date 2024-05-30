<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Edit Supplier</h1>
        </div>
        <div class="col-4">
            <a href="?n=supplier&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
        </div>
        <?php
        include_once('koneksi.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM supplier WHERE id='$id'";
        $query = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_array($query);
        ?>
        <div class="col">
            <form action="?n=supplier&s=update" method="post">
                <div class="mb-2">
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="<?= $row['nama'] ?>" class="form-control" autofocus>
                </div>
                <div class="mb-2">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?=$row['alamat']?>">
                </div>
                <div class="mb-2">
                    <label for="">Kontak</label>
                    <input type="text" name="kontak" class="form-control" value="<?= $row['kontak'] ?>">
                </div>
                <div class="mb-2">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="reset" class="btn btn-warning">
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>