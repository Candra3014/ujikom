<?php

require "connection.php";

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
				alert('User BERHASIL Ditambahkan!');
				</script>";
    } else {
        echo "register err";
        echo mysqli_error($conn);
    }
}

if (isset($_POST["login"])) {
    if (loginlvl($_POST) > 0) {
        if (loginlvl($_POST) == 2) {
            Header("Location: halaman_admin.php"); /*echo "SUCCESS LVL : 2"; */
        }
        if (loginlvl($_POST) == 1) {
            Header("Location: halaman_user.php"); /*echo "SUCCESS LVL : 1"; */
        }
    } else {
        echo "login err";
        echo mysqli_error($conn);
    }
}

?>

<title>Enter Perpustakaan</title>
<style>
    .kolom {
        float: left;
        width: 50%;
    }

    label {
        display: block;
    }

    ul {
        list-style-type: none;
    }
</style>
</head>

<body>


    <div class="kolom">
        <h2>Register</h2>
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
                    <input type="text" name="email" id="email" placeholder="Email"">
                </li>
                <li>
                    <label>NoHP</label>
                    <input type="text" name="nohp" id="nohp" placeholder="NoHP"">
                </li>
                <li>
                    <label>Password</label>
                    <input type=" text" name="password" id="password" placeholder="PASSWORD">
                </li>
                <li>
                    <label>Konfirmasi Password</label>
                    <input type="text" name="password2" id="password2" placeholder="KONFIRMASI PASSWORD">
                    <?php if (isset($_POST["register"])) : ?>
                        <?php if ($_POST["password"] != $_POST["password2"]) : ?>
                            <p style="color: red; font-style: italic;"> Password Tidak Sama!</p>
                    <?php endif;
                    endif; ?>
                </li>
                <li><button action="submit" name="register">REGISTER</button></li>
            </ul>
            <a href="index.php">Login</a><br /><br />
        </form>
    </div>

</body>

</html>