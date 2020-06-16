<!-- proses update data -->
    <?php 

        if(isset($_POST['update'])){
            $kdkaryawan=$_POST['kdkaryawan'];
            $nama=$_POST['nama'];
            $alamat=$_POST['alamat'];
            $notelp=$_POST['notelp'];
            $email=$_POST['email'];

            // proses update
            $sql = "UPDATE karyawan SET nama='$nama',alamat='$alamat',notelp='$notelp',email='$email' WHERE kdkaryawan='$kdkaryawan'";
            if ($conn->query($sql) === TRUE) {
                header("Location:?page=karyawan");
            }
        }

        $kdkaryawan=$_GET['kdkaryawan'];

        $sql = "SELECT * FROM karyawan WHERE kdkaryawan='$kdkaryawan'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    ?>
<!-- end proses update data -->

<h1 align="center">UPDATE DATA KARYAWAN</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
            <label for="kdkaryawan">Kode Karyawan</label>
            <input type="text" class="form-control" value="<?php echo $row['kdkaryawan']; ?>" name="kdkaryawan" readonly>
            </div>
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" value="<?php echo $row['nama']; ?>" name="nama" maxlength="50" required>
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" value="<?php echo $row['alamat']; ?>" name="alamat" maxlength="50" required>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label for="notelp">No Telepon</label>
            <input type="text" class="form-control" value="<?php echo $row['notelp']; ?>" name="notelp" maxlength="14" required>
            </div>
            <div class="form-group">
            <label for="email">Alamat E-Mail</label>
            <input type="text" class="form-control" value="<?php echo $row['email']; ?>" name="email" maxlength="50" required>
            </div>
        </div>
        <div class="col-sm-12" align="center">
            <input class="btn btn-primary" type="submit" name="update" value="Update">
            <a class="btn btn-danger" href="?page=karyawan">Batal</a>
        </div>
    </div>
</form>

<?php
$conn->close();
?>