<html>
<head>
<title>Form Tambah User</title>
</head>
<body>

<form action="tambah_jurusan.php" method="POST">user_name :
<input type="text" name="nama_jurusan" value="" placeholder="Input nama jurusan">
<br>
<input type="submit" name="simpan" value="Simpan">
</form>

<?php
 if ($_POST['simpan']) {
    include ('connect.php');
    $nama_jurusan = $_POST['nama_jurusan'];
    $sql=mysql_query ("INSERT INTO tb_jurusan VALUES ('','$nama_jurusan')");
    }
    ?>
    
    </body>
    </html>
    









