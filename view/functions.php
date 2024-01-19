<?php 
//koneksi ke database 
$conn = mysqli_connect("localhost", "root", "", "datamahasiswa");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}
 
function registrasi($data) {
	global $conn;
	$nama = filter_var($data["nama"],FILTER_SANITIZE_STRING);
	$nrp = strtolower(stripcslashes($data["nrp"]));
	$departemen = strtolower(stripcslashes($data["departemen"]));
	$telp = strtolower(stripcslashes($data["telp"]));
	$bank = strtolower(stripcslashes($data["bank"]));
	$norek = strtolower(stripcslashes($data["norek"]));
	$nik = strtolower(stripcslashes($data["nik"]));
	$alamat = strtolower(stripcslashes($data["alamat"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);


	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT nrp FROM regis WHERE nrp = '$nrp'");
	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('data diri sudah terdaftar!')
				</script>";
		return false;
	}


	//cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
				</script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO regis
				VALUES 
			('', '$nama', '$nrp', '$departemen', '$telp', '$bank', '$norek', '$nik', '$alamat' ,'$password')");
		
	return mysqli_affected_rows($conn);
}

// function tampil($data){
// 	global $conn;
// 	$nrp = $_POST['nrp'];
// 	$query = mysqli_query($conn, "SELECT nama FROM regis WHERE nrp = '$nrp'");
// 	$result = mysqli_fetch_assoc($query);

// 	if($result){
// 		return $result['nama'];
// 	}
	
// }
?>