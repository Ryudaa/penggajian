<h1 align="center">DATA PENGGAJIAN</h1>
<a class="btn btn-primary" href="?page=gaji&action=tambah">Tambah</a>
<table class="table table-bordered table-hover" id="myTable">
    <thead>
      <tr>
        <th width="25px">No</th>
        <th width="80px">Kode Gaji</th>
        <th width="120px">Kode Karyawan</th>
        <th width="90px">Nama</th>
        <th width="120px">Tanggal Gajian</th>
        <th width="70px">Bulan</th>
        <th width="70px">Tahun</th>
        <th width="70px">Nominal</th>
        <th width="120px">Aksi</th>
      </tr>
    </thead>
    <tbody>
	<!-- letakkan proses menampilkan disini -->
    <?php
     $i = 1;
     $sql = "SELECT * FROM penggajian INNER JOIN karyawan ON penggajian.kdkaryawan=karyawan.kdkaryawan ORDER BY kdgaji DESC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
    ?>
    <tr>
        <td><?php echo $i++; ?></td>
	    <td><?php echo $row['kdgaji']; ?></td>
	    <td><?php echo $row['kdkaryawan']; ?></td>
	    <td><?php echo $row['nama']; ?></td>
	    <td><?php echo $row['tanggal']; ?></td>
	    <td><?php echo $row['bulan']; ?></td>
	    <td><?php echo $row['tahun']; ?></td>
	    <td><?php echo $row['nominal']; ?></td>
	    <td style="text-align:center">
            <a class="btn btn-warning" href="?page=gaji&action=update&kdgaji=<?php echo $row['kdgaji']; ?>">Edit</a>
            <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=gaji&action=hapus&kdgaji=<?php echo $row['kdgaji']; ?>">Hapus</a>
        </td>
    </tr>
    <?php
     }
     $conn->close();
    ?>
   </tbody>
</table>