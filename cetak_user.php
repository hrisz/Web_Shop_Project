<html>

<head>
    <title>Tampil Data User</title>
</head>

<body>
    <table cellpadding="2" cellspacing="0" border="1" align="center">
        <thead>
            <th>Name</th>
            <th>UserID </th>
            <th>Email </th>
            <th>Address</th>
            <th>Password</th>
            
        </thead>
        <tbody>
            <?php
            include('connect.php');
            $sql = mysql_query("select * from tb_mahasiswa,tb_jurusan where tb_mahasiswa.id_jurusan=tb_jurusan.id_jurusan order by id_mahasiswa ASC");
            $no = 1;
            while ($row = mysql_fetch_array($sql)) {
                echo "
    <tr>
    <td>" . $no . "</td>
    <td width='150'>" . $row['name'] . "</td>
    <td width='150'>" . $row['nama_mahasiswa'] . "</td>
    <td width='150'>" . $row['nama_jurusan'] . "</td>
    <td width='150'>" . $row['tempat_lahir'] . "," . $row['tanggal_lahir'] . "</td>
    <td width='150'>" . $row['alamat'] . "</td>
    </tr>";
                $no++;
            };
            ?>
        </tbody>
    </table>
</body>

</html>