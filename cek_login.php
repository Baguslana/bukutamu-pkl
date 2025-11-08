<?php

//Aktifkan session
session_start();

//Panggil koneksi databases
include "koneksi.php";

@$pass = md5($_POST['password']);
@$username = mysqli_escape_string($koneksi, $_POST['username']);
@$password = mysqli_escape_string($koneksi, $pass);


$login = mysqli_query($koneksi, "SELECT * FROM user where username = '$username' and password = '$password' ");

$data = mysqli_fetch_array($login);

//Jika username dan password sesuai
if ($data) {
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];

    header('location:admin.php');
} else {
    echo "<script>alert('Maaf, Login Gagal, Pastikan Password dan Username Anda Benar...!');
    document.location='index.php'
    </script>";
}
