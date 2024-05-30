<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Edit penjualan</h1>
        </div>
        <div class="col-4">
            <a href="?n=penjualan&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
        </div>
        <?php
        include_once('koneksi.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM penjualan WHERE id='$id'";
        $query = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_array($query);
        ?>
        <div class="col">
            <form action="?n=penjualan&s=update" method="post">
                <div class="mb-2">
                    <label for="">Supplier id</label>
                    <input type="text" name="supplier_id" value="<?= $row['supplier_id'] ?>" class="form-control" autofocus>
                </div>
                <div class="mb-2">
                    <label for="">Total</label>
                    <input type="text" name="total" class="form-control" value="<?=$row['total']?>">
                </div>
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="reset" class="btn btn-warning">
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>