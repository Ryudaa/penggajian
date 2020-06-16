<!-- proses tambah data -->
<?php
    if(isset($_POST['simpan'])){

        // ambil data dari form
        $kdkaryawan=$_POST['kdkaryawan'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $notelp=$_POST['notelp'];
        $email=$_POST['email'];
        
        // validasi
        $sql = "SELECT * FROM karyawan WHERE kdkaryawan='$kdkaryawan'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Kode karyawan sudah dipakai </strong>
                </div>
            <?php
        }else{
        //proses simpan
            $sql = "INSERT INTO karyawan VALUES ('$kdkaryawan','$nama','$alamat','$notelp','$email')";
            if ($conn->query($sql) === TRUE) {
                header("Location:?page=karyawan");
            }
        }
    }
    $conn->close();
?>
<!-- end proses tambah data -->
<h1 align="center">TAMBAH DATA KARYAWAN</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
            <label for="kdkaryawan">Kode Karyawan</label>
            <input type="text" class="form-control" name="kdkaryawan" maxlength="5" required>
            </div>
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" maxlength="50" required>
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" maxlength="50" required>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label for="notelp">No Telepon</label>
            <input type="text" class="form-control" name="notelp" maxlength="14" required>
            </div>
            <div class="form-group">
            <label for="email">Alamat E-Mail</label>
            <input type="text" class="form-control" name="email" maxlength="50" required>
            </div>
        </div>
        <div class="col-sm-12" align="center">
            <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
            <a class="btn btn-danger" href="?page=karyawan">Batal</a>
        </div>
    </div>
</form>