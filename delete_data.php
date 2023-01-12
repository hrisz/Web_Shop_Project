<?php
include 'config.php';
if ($_GET['delete_id']){
    $id = $_GET['delete_id'];
    $del = "DELETE FROM data_user WHERE nama='$id'";
    $del = mysqli_query($database,$del);
    header("Location: userinfo.php");
}
?>