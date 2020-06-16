<!-- update data -->
<?php 

// mengambil kode gaji
$kdgaji=$_GET['kdgaji'];

if(isset($_POST['update'])){
    $tanggal=$_POST['tanggal'];
    $bulan=$_POST['bulan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

    // proses update
    $sql = "UPDATE penggajian SET tanggal='$tanggal',bulan='$bulan',tahun='$tahun',nominal='$nominal' WHERE kdgaji='$kdgaji'";
    if ($conn->query($sql) === TRUE) {
        header("Location:?page=gaji");
    }
}

$sql = "SELECT * FROM penggajian INNER JOIN karyawan ON penggajian.kdkaryawan=karyawan.kdkaryawan WHERE kdgaji='$kdgaji'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!-- end update data -->

<h1 align="center">UPDATE DATA PENGGAJIAN</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
            <label for="karyawan">Nama Karyawan/Kode Karyawan</label>
            <input type="text" class="form-control" value="<?php echo $row['nama']; echo "/"; echo $row['kdkaryawan']; ?>" name="kdkaryawan" readonly>
            </div>

            <div class="form-group">
            <label for="tanggal">Tanggal Gajian</label>
            <input type="date" class="form-control" name="tanggal" value='<?php echo $row['tanggal'];?>' required>
            </div>

            <div class="form-group">
            <label for="bulan">Bulan</label>
            <select class="chosen-select" data-placeholder="Pilih bulan" name="bulan">
                <option value="<?php echo $row['bulan'];?>"><?php echo $row['bulan'];?></option>
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
            <input type="number" class="form-control" name="tahun" min="0" max="9999" value='<?php echo $row['tahun'];?>' required>
            </div>

            <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="number" class="form-control" name="nominal" min="0" max="99999999" value='<?php echo $row['nominal'];?>' required>
            </div>
            <div align="center">
            <input class="btn btn-primary" type="submit" name="update" value="Update">
            <a class="btn btn-danger" href="?page=gaji">Batal</a>
            </div>
        </div>
    </div>
</form>

<?php
$conn->close();
?>