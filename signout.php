<?php
session_start();

session_unset();
session_destroy();

if (isset($_COOKIE['id_user'])) {
    setcookie('id_user', '', time() - 3600, '/');
}
if (isset($_COOKIE['nama'])) {
    setcookie('nama', '', time() - 3600, '/');
}
if (isset($_COOKIE['level'])) {
    setcookie('level', '', time() - 3600, '/');
}

header("Location: index.php?page=signin");