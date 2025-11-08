<?php

// session start
session_start();

// hilangkan session
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['name']);

session_destroy();
echo "<script>alert('Anda telah keluar dari halaman Admin...!');
    document.location='index.php'
    </script>";
