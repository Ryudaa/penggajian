<?php

$kdkaryawan=$_GET['kdkaryawan'];

$sql = "DELETE FROM karyawan WHERE kdkaryawan='$kdkaryawan'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=karyawan");
}
$conn->close();
?>