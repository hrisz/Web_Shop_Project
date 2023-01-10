<html>

<head>
    <title>Tampil Data User</title>
</head>

<body>
    <center>
        <table cellpadding="2" cellspacing="0" border="1">
            <thead>
                <th>No</th>
                <th width='150'>Username</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                include('connect.php');
                $sql = mysql_query("select * from tb_jurusan order by id_jurusan ASC");
                $no = 1;
                while ($row = mysql_fetch_array($sql)) {
                    $id_jurusan = $row['id_user'];
                    $nama_jurusan = $row['user_name'];
                    echo "
<tr>
<td>" . $no . "</td>
<td width='150'>" . $row['user_name'] . "</td>
<td><a href='hapus_jurusan.php?hapus_id_jurusan=" . $row['id_user'] . "'>Hapus
</a></td>
</tr>";
                    $no++;
                };
                ?>
            </tbody>
        </table>
    </center>
    <?php
    if ($_GET['hapus_id_jurusan']) {
        $id = $_GET['hapus_id_jurusan'];
        $del = "DELETE FROM tb_jurusan where id_jurusan='$id'";
        $del = mysql_query($del);
    } ?>
</body>

</html>