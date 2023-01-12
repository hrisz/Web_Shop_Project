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

if(isset($_POST['signin'])){

    $email = $_POST['logemail'];
    $password = password_hash($_POST['logpassword'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO log_data (email, password)
    VALUE ('$email','$password')";
    $query = mysqli_query($database, $sql);

    if($query) {
        header("Location: successlog.php");
    }
    else {
        header("Location: index.php");   
    }
}
else {
    die("Failed Login");
}
?>