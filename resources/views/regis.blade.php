@extends('layouts.app')

@section('content')

<?php
$dir = dirname(__FILE__);
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('User baru berhasil ditambahkan!');
                window.location.href = 'login.php';
              </script>";
        exit;
    } else {
        echo mysqli_error($conn);
    }
}
?>


<head>
	<title>Halaman Registrasi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require ($dir . '/base/head.php') ?>
</head>
<body style="background-color: #bacfe6" >
	<div class="registrasi-container d-flex flex-column align-items-center px-3 pt-5 pb-5 ">
	<div class="form-container ">
	<h1>Halaman Registrasi</h1>

	<form action="" method="post">
		<div class="form-group">
			<label for="nama">Nama Lengkap:</label>
			<input type="text" class="form-control" name="nama" id="nama">
		</div>
		<div class="form-group">

			<label for="nrp">NRP :</label>
			<input type="text" class="form-control" name="nrp" id="nrp">
		</div>

		<div class="form-group">

			<label for="departemen">Departemen :</label>
			<input type="text" class="form-control" name="departemen" id="departemen">
		</div>

		<div class="form-group">
			<label for="telp">No. HP :</label>
			<input type="text" class="form-control" name="telp" id="telp">
		</div>

		<div class="form-group">
			<label for="bank">Bank :</label>
			<input type="text" class="form-control" name="bank" id="bank">
		</div>
		<div class="form-group">

			<label for="norek">No. Rekening :</label>
			<input type="text" class="form-control" name="norek" id="norek">
		</div>
		<div class="form-group">
			<label for="nik">NIK :</label>
			<input type="text" class="form-control" name="nik" id="nik">

		</div>
		<div class="form-group">
			<label for="alamat">Alamat sesuai KTP :</label>
			<input type="text" class="form-control" name="alamat" id="alamat">
		</div>
			<div class="form-group">
				<label for="password">Password :</label>
				<input type="password" class="form-control" name="password" id="password">
			</div>
		<div class="form-group">
			<label for="password2">Konfirmasi Password :</label>
			<input type="password" class="form-control" name="password2" id="password2">
		</div>

	<br>

		<button type="submit" name="register">Register!</button>
	</form>
	</div>
	</div>

	<?php require ($dir . '/base/script.php') ?>
</body>
