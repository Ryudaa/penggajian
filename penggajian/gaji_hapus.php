<?php

$kdgaji=$_GET['kdgaji'];

$sql = "DELETE FROM penggajian WHERE kdgaji='$kdgaji'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=gaji");
}
$conn->close();
?>