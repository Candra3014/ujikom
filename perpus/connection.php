<?php

$conn = mysqli_connect('localhost', 'root', '', '2019131017_candra');

function registrasi($data)
{
	global $conn;

	$nim = $data["nim"];
	$nama = $data["nama"];
	$prodi = $data["prodi"];
	$semester = $data["semester"];
	$email = $data["email"];
	$nohp = $data["nohp"];
	$password = $data["password"];
	$password2 = $data["password2"];

	// cek username
	$usedname = mysqli_query($conn, "SELECT nim FROM user WHERE nim = '$nim'");
	if (mysqli_fetch_assoc($usedname)) {
		echo "<script>
				alert('Username TELAH DIPAKAI! Ganti Username');
				</script>";
		return 0;
	}

	// cek password
	if ($password != $password2) {
		return 0;
	}

	// SUCCESS
	mysqli_query($conn, "INSERT INTO user VALUES ('', '$nim', '$nama', '$prodi', '$semester', '$email', '$nohp', '$password','1')");
	return 1;
}

function loginlvl($data)
{
	global $conn;

	$nm = $data["usernamel"];
	$pw = $data["passwordl"];
	$user = mysqli_query($conn, "SELECT level FROM user WHERE nim = '$nm' AND password = '$pw'");
	$userdt = mysqli_fetch_assoc($user);

	// cek user
	if ($userdt == 0) {
		return 0;
	}

	// return level
	return $userdt["level"];
}