<?php

	require "connection.php";
	
	$users = mysqli_query($conn, "SELECT * FROM user");

	// hapus dt
	if(isset($_GET["hapus"])) {
		$hps = $_GET["hapus"];
		mysqli_query($conn, "DELETE FROM user WHERE id = '$hps'");
		$users = mysqli_query($conn, "SELECT * FROM user");
	}
?>

<html>
	<head>
		<title>USER PAGE</title>
	</head>
	<body>
		<h2>Admin</h2>

		<a href="register.php">Tambah Anggota</a><br /><br />
		<table border = 5 width="1800px">
			<tr>
				<th>No</th>
				<th>Nim</th>
				<th>Nama</th>
				<th>Prodi</th>
				<th>Semester</th>
				<th>Email</th>
				<th>NoHP</th>
				<th>AKSI</th>
			</tr>
			
			<?php $i = 1; foreach($users as $dt) { ?>
			<tr>
				<td>
					<?php echo $i++;?>
				</td>
				<td>
					<?php echo $dt["nim"];?>
				</td>
				<td>
					<?php echo $dt["nama"];?>
				</td>
				<td>
					<?php echo $dt["prodi"];?>
				</td>
				<td>
					<?php echo $dt["semester"];?>
				</td>
				<td>
					<?php echo $dt["email"];?>
				</td>
				<td>
					<?php echo $dt["nohp"];?>
				</td>
				<td>
					<a href="update.php?update=<?php echo $dt["id"]?>">UBAH</a> | <a href="?hapus=<?php echo $dt["id"]?>">HAPUS	</a>
				</td>
			</tr>
			<?php } ?>
		</table>
		
	</body>
</html>