<?php 
    date_default_timezone_set("Asia/Jakarta");
    include "config.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-chosen.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="style.css">

    <title></title>
  </head>
  <body>

    <!-- navbar menu -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=karyawan">Karyawan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=gaji">Penggajian</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Report Karyawan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Report Penggajian</a>
            </li>
        </ul>
    </nav>
    <!-- end navbar menu -->

    <!-- container -->
    <div class="container">
        <?php

            if ($conn->connect_error) {
                ?>
                    <div class="alert alert-danger">
                        KONEKSI DATABASE GAGAL, CEK PENGATURAN !
                    </div>
                <?php
                exit;
            }           
 

            $page = isset($_GET['page']) ? $_GET['page'] : "";
            $action = isset($_GET['action']) ? $_GET['action'] : "";

            if ($page==""){
                include "welcome.php";
            }elseif ($page=="karyawan"){
                if ($action==""){
                    include "karyawan_tampil.php";
                }elseif ($action=="tambah"){
                    include "karyawan_tambah.php";
                }elseif ($action=="update"){
                    include "karyawan_update.php";
                }else{
                    include "karyawan_hapus.php";
                }
            }elseif ($page=="gaji"){
                if ($action==""){
                    include "gaji_tampil.php";
                }elseif ($action=="tambah"){
                    include "gaji_tambah.php";
                }elseif ($action=="update"){
                    include "gaji_update.php";
                }else{
                    include "gaji_hapus.php";
                }
            }else{
                include "NAMA_HALAMAN";
            }
        ?>
    </div>
    <!-- end container -->
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        } );
    </script>
    <script>
        $(function() {
            $('.chosen-select').chosen();
        });
</script>
  </body>
</html>