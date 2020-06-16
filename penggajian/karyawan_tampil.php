<h1 align="center">DATA KARYAWAN</h1>
<a class="btn btn-primary" href="?page=karyawan&action=tambah" style="margin-bottom: 10px;">Tambah</a>
<table class="table table-bordered table-hover" id="myTable">
    <thead>
      <tr>
        <th width="150px">Kode Karyawan</th>
        <th width="100px">Nama</th>
        <th width="200px">Alamat</th>
        <th width="100px">No Telepon</th>
        <th width="100px">Alamat E-Mail</th>
        <th width="180px">Aksi</th>
      </tr>
    </thead>
    <tbody>
	<!-- letakkan proses menampilkan disini -->
    <?php
        $sql = "SELECT * FROM karyawan ORDER BY kdkaryawan ASC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $row['kdkaryawan']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['notelp']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td style="text-align:center">
                <a class="btn btn-warning" href="?page=karyawan&action=update&kdkaryawan=<?php echo $row['kdkaryawan']; ?>">Edit</a>
                <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=karyawan&action=hapus&kdkaryawan=<?php echo $row['kdkaryawan']; ?>">Hapus</a>
            </td>
        </tr>
    <?php
        }
        $conn->close();
    ?>
   </tbody>
</table>