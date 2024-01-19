<?php
$dir = dirname(__FILE__);

session_start();
require 'functions.php';
if (isset($_POST["login"])) {
    $nama = tampil($_POST["nrp"]);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require ($dir . '/base/head.php') ?>
    <title>Dashboard Presensi Asisten Dosen</title>
    <link rel="stylesheet" href="coba.css">
</head>

<body>
    <div class="container-xxl px-0">
    <nav class="navbar navbar-expand">
        <div class="container">
            <a href="#" class="navbar-brand">PRESENSI ASISTEN DOSEN</a>
            <div id="navmenu">
                <ul class="navbar-nav">
                    <li class="nav item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nama Asdos-->
    <div class="mb-2 border-rad-0 mx-0 px-0">
        <div class="">
            <p>Hallo,</p>
            <h3> Diva </h3>
        </div>
    </div>

    <!-- Daftar Matkul -->
    <div class="container mt-4">
    <div class="card">
        <div class="card-body">
        <p style="font-weight: bold;">Daftar Mata Kuliah</p>
            <ul>
                <li><a href="matkul.php">Mata Kuliah (kelas)</a></li>
                <li><a href="matkul.php">Mata Kuliah (kelas)</a></li>
            </ul>
        </div>
    </div>
     
    <!-- Section -->
    <div class="d-flex flex-column">
        <div class="card card-body">
        <p style="font-weight: bold;">Section 1</p>
            <p style="font-size: 15px; text-decoration: underline;" class="tugas1"><a href="">Tugas asdos mengupload file berisi nilai mahasiswa sesudah ETS</a></p>
        </div>
        <div class="card card-body">
            <p style="font-weight: bold;">Section 1</p>
            <p style="font-size: 15px; text-decoration: underline;" class="tugas1"><a href="">Tugas asdos mengupload file berisi nilai mahasiswa sesudah ETS</a></p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <p style="font-weight: bold;">Section 1</p>
            <p style="font-size: 15px; text-decoration: underline;" class="tugas1"><a href="">Tugas asdos mengupload file berisi nilai mahasiswa sesudah ETS</a></p>
        </div>
        <div class="col">
            <p style="font-weight: bold;">Section 1</p>
            <p style="font-size: 15px; text-decoration: underline;" class="tugas1"><a href="">Tugas asdos mengupload file berisi nilai mahasiswa sesudah ETS</a></p>
        </div>
    </div>

    </div>
    </div>
    

<!--    <footer>
        <div>
            <h5>Institut Teknologi Sepuluh Nopember</h5>
        </div>
    </footer>-->

    <?php require ($dir . '/base/head.php') ?>
</body>
</html>