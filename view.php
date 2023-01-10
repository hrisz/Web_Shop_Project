<html>

<head>
    <title>Tampil Data User</title>
</head>

<body>
    <table cellpadding="2" cellspacing="0" border="1">
        <thead>
            <th>No</th>
            <th width='150'>ID User</th>
        </thead>
        <tbody>
            <?php
            include('connect.php');
            $sql = mysqli_query("select * from tb_jurusan order by id_jurusan ASC");
            $no = 1;
            while ($row = mysqli_fetch_array($sql)) {
                $nama_jurusan = $row['user_name'];
                echo "
<tr>
<td>" . $no . "</td>
<td width='150'>" . $row['user_name'] . "</td>
</tr>
";
                $no++;
            };
            ?>
        </tbody>

    </table>
</body>

</html>