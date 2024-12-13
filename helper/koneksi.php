<?php
// Mulai session
session_start();

$servername = "localhost"; // Ganti dengan server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "library"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];
} else if (isset($_COOKIE['id_user'])) {
    $id_user = $_COOKIE['id_user'];
} else {
    $id_user = null;
}

if (isset($_SESSION['nama'])) {
    $nama = $_SESSION['nama'];
} else if (isset($_COOKIE['nama'])) {
    $nama = $_COOKIE['nama'];
} else {
    $nama = null;
}

if (isset($_SESSION['level'])) {
    $level = $_SESSION['level'];
} else if (isset($_COOKIE['level'])) {
    $level = $_COOKIE['level'];
} else {
    $level = null;
}