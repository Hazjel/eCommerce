<?php

include '../DB/connect.php';
// Mulai session
session_start();

// Hubungkan dengan connect.php
$username = $_POST['username'];
$password = $_POST['password'];

// Menyeleksi data dengan username dan password yang sesuai
$data = mysqli_query($connect, "SELECT * FROM users WHERE username='$username' and password='$password'");

// Cek jumlah baris yang ditemukan
$cek = mysqli_num_rows($data);


// Jika login berhasil
if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $_SESSION['message'] = "Login berhasil!";
    header("location:../index.php");
} else {
    // Jika login gagal
    $_SESSION['message'] = "Username atau password salah!";
    header("location:../index.php");
}

// Tutup koneksi
mysqli_close($connect);
