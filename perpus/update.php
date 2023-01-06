<?php 

	require "connection.php";
	
	$upid = $_GET["update"];
	$result = mysqli_query($conn, "SELECT * FROM user WHERE id = '$upid'");
	$userob = mysqli_fetch_assoc($result);

	if(isset($_POST["update"])) {
		$nim = $_POST["nim"];
		$nama = $_POST["nama"];
        $prodi = $_POST["prodi"];
		$semester = $_POST["semester"];
        $email = $_POST["email"];
        $nohp = $_POST["nohp"];
        $password = $_POST["password"];
		
		if($_POST["admin"]) { $admin = 2; } else { $admin = 1; }
		mysqli_query($conn, "UPDATE user SET nim = '$nim', nama = '$nama', prodi = '$prodi', semester = '$semester', email = '$email', nohp = '$nohp', password = '$password', level = '$admin' WHERE id = '$upid'");
		Header("Location: halaman_admin.php");
		}
	
?>

<html>
	<head>
		<title>UPDATE DATA</title>
		<style>
			label{
				display: block;
			}
			ul{
				list-style-type: none;
			}
		</style>
	</head>
	<body>
		
		<form action="" method="post">
			<ul>
				 <li>
                    <label>Nim</label>
                    <input type="text" name="nim" id="nim" placeholder="NIM">
                </li>
                <li>
                    <label>Nama</label>
                    <input type="text" name="nama" id="nama" placeholder="Nama">
                </li>
                <li>
                    <label>Prodi</label>
                    <input type="text" name="prodi" id="prodi" placeholder="Prodi">
                </li>
                <li>
                    <label>Semester</label>
                    <input type="text" name="semester" id="semester" placeholder="Semester">
                </li>
                <li>
                    <label>Email</label>
                    <input type="text" name="email" id="email" placeholder="Email">
                </li>
                <li>
                    <label>NoHP</label>
                    <input type="text" name="nohp" id="nohp" placeholder="NoHP">
                </li>
                <li>
                    <label>Password</label>
                    <input type=" text" name="password" id="password" placeholder="PASSWORD">
                    <li>
                        
					<label>Admin</label>
					<input type="checkbox" name="admin" id="admin"<?php if($userob["level"] == 2) { echo "checked";}?>>
				</li>
               
				<li><button action="submit" name="update">UPDATE</button></li>
			</ul>
		</form>
		
	</body>
</html>