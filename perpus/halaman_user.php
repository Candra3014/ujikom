<?php

	require "connection.php";
	
	$users = mysqli_query($conn, "SELECT * FROM user");

?>

<html>
	<head>
		<title>USER PAGE</title>
	</head>
	<body>
		<h2>Non Admin</h2>
		
		<table border = 10 >
			<tr>
            <th>No</th>
				<th>Nim</th>
				<th>Nama</th>
				<th>Prodi</th>
				<th>Semester</th>
				<th>Email</th>
				<th>NoHP</th>
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
			</tr>
			<?php } ?>
		</table>
		
	</body>
</html>