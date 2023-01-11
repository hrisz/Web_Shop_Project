<?php
include("config.php");

if(isset($_POST['signup'])){

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO data_user (nama, username, email, password)
    VALUE ('$nama','$username','$email','$password')";
    $query = mysqli_query($database, $sql);

    if($query) {
        header("Location: index.php");
    }
    else {
        header("Location: index.php");   
    }
}
else {
    die("Access Denied!");
}
?>