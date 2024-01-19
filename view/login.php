<?php 
session_start();
require 'functions.php';

//cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	//ambil nrp berdasarkan id
	$result = mysqli_query($conn, "SELECT nrp FROM regis WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	//cek cookie dan nrp
	if( $key === hash('sha256', $row['nrp']) ) {
		$_SESSION['login'] = true;
	}
	
}



if( isset($_SESSION["login"]) ) {
	$_SESSION["nrp"] = $_POST["nrp"];
	header("Location: header.php");
	exit;
}


if( isset($_POST["login"]) ) {

	$nrp= $_POST["nrp"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM regis WHERE nrp = '$nrp'");

	//cek nrp
	if (mysqli_num_rows($result) === 1 ) {
		
		//cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			//set session
			$_SESSION["login"] = true;

			//cek remember me
			if( isset($_POST['remember']) ) {
				//buat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['nrp']), time()+60);


			}


			header("Location: header.php");
			exit;
		}
	}


	$error = true;

}



 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Login</title>
	<style type="text/css">
		body{
		    height:100vh;
		    background-color:#013880;
		}

		*{
		    margin:0;
		    padding:0;
		    outline:0;
		    font-family:'Open Sans' sans-serif;
		}

		.container{
		    position:absolute;
		    left:50%;
		    top:50%;
		    transform:translate(-50%,-50%);
		    padding:20px 25px;
		    width:300px;
		    border:1px solid #6586B2;
		    border-radius:10px;
		    background-color:#809CC0
		}
		.container h1{
		    text-align:center;
		    color:black;
		    margin-bottom:10px;
		    /text-transform:uppercase;/
		    font-size:30px;
		}

/*		.container label{
		    text-align:center;
		    color:#E8F0FE;
		}*/

		.container form input{
		    width:-webkit-fill-available;
		    padding:6px 5px;
		    margin-bottom:15px;
		    border:none;
		    background-color:#E8F0FE;
		}

		.container form button{
		    width:100%;
		    padding:8px 0;
		    border:none;
		    background-color:#F1C40F;
		    font-size:14px;
		    font-weight:bold;
		    border-radius:6px;
		    color:#013880;
		    cursor:pointer;
		    margin-top:12px;
		    margin-bottom:10px;
		}
	</style>
</head>

<body>
	<?php if ( isset($error) ) : ?>
		<p style="color : red; font-style: italic;">nrp/ password salah</p> 
	<?php  endif; ?>

<div class="container">
        <h1>Login</h1>
        <form action="" method="post">
				<label for="nrp" class="text-align:center; color:#E8F0FE;">NRP :</label>
				<input type="text" name="nrp" id="nrp">

				<label for="password" class="text-align:center; color:#E8F0FE;">Password :</label>
				<input type="password" name="password" id="password">

				
				<!-- <div class="display: flex; color:#013880">
					<label for="remember" class="text-align:center; color:#E8F0FE;">Remember me</label>
					<input type="checkbox" name="remember" id="remember" >
				</div> -->

				<button type="submit" name="login">Login</button>
        </form>
</div>

</body>
</html>