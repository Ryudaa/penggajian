<!-- tambah data -->
<?php
    if(isset($_POST['simpan'])){
        $tanggal=date("Y/m/d");
        $kdkaryawan=$_POST['kdkaryawan'];
        $bulan=$_POST['bulan'];
        $tahun=$_POST['tahun'];
        $nominal=$_POST['nominal'];
        
        // validasi
        $sql = "SELECT*FROM penggajian WHERE kdkaryawan='$kdkaryawan' AND bulan='$bulan' AND tahun='$tahun'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Gaji sudah diambil</strong>
                </div>
            <?php
        }else{
        //proses simpan
            $sql = "INSERT INTO penggajian VALUES (Null, '$kdkaryawan','$tanggal','$bulan','$tahun','$nominal')";
            if ($conn->query($sql) === TRUE) {
                header("Location:?page=gaji");
            }
        }
    }
?>
<!-- end tambah data -->

<h1 align="center">TAMBAH DATA PENGGAJIAN</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
            <label for="karyawan">Nama Karyawan/Kode Karyawan</label>
            
            <select class="chosen-select" data-placeholder="Pilih karyawan" name="kdkaryawan">
            <option value=""></option>
                <?php
                    $sql = "SELECT * FROM karyawan ORDER BY nama ASC";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                ?>
                <option value="<?php echo $row['kdkaryawan']; ?>"><?php echo $row['nama']; echo "/"; echo $row['kdkaryawan']; ?></option>
                <?php
                    }
                ?>
            </select>
            </div>

            <div class="form-group">
            <label for="bulan">Bulan</label>
            <select class="chosen-select" data-placeholder="Pilih bulan" name="bulan">
                <option value=""></option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
            </select>
            </div>

            <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" class="form-control" name="tahun" min="0" max="9999" required>
            </div>

            <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="number" class="form-control" name="nominal" min="0" max="99999999" required>
            </div>
            <div align="center">
            <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
            <a class="btn btn-danger" href="?page=gaji">Batal</a>
            </div>
        </div>
    </div>
</form>
<?php
$conn->close();
?>