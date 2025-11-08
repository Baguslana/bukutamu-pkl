<?php
include "koneksi.php";
session_start();

if (empty($_SESSION['username']) || empty($_SESSION['password']) || $_SESSION['id'] <= 0) {
    echo "<script>
        alert('Maaf, Anda harus login terlebih dahulu!');
document.location='admin_login.php'
    </script>";
    exit;
}

$userId = (int)$_SESSION['id'];
?>

<link rel="icon" href="assets/img/logo.png" type="image/x-icon">

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buku Tamu Dinas Pendidikan dan Kebudayaan</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>


</head>

<body class="bg-success">

    <!-- Container -->
    <div class="container">