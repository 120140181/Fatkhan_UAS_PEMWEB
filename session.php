<?php
// Mulai sesi
session_start();

// Sekarang variabel sesi dapat digunakan atau diatur
$_SESSION['user_id'] = 123;
$_SESSION['username'] = 'root';

// Penggunaan variabel sesi
echo 'Welcome, ' . $_SESSION['username'];

// Untuk mengakhiri sesi
session_destroy();
?>
