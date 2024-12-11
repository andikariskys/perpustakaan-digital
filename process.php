<?php
include('helper/koneksi.php');

$email      = $_POST['email'];
$password   = md5($_POST['password']);
$rememberme = !empty($_POST['rememberme']);

$sql = "SELECT * FROM data_user WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    if ($password == $user['password']) {
        if ($rememberme == 1) {
            $_SESSION['id_user']    = $user['id_user'];
            $_SESSION['nama']       = $user['nama'];
            $_SESSION['level']      = $user['level'];
        } else {
            $expired = time() + (86400 * 31); // 86400 detik = 1 hari
            setcookie('id_user', $user['id_user'], $expired);
            setcookie('nama', $user['nama'], $expired);
            setcookie('level', $user['level'], $expired);
        }

        if ($user['status'] == 'active') {
            if ($user['level'] == 'admin') {
                header("Location: admin/index.php");
            } elseif ($user['level'] == 'pustakawan') {
                header("Location: pustakawan/index.php");
            }
        } else {
            if ($user['level'] == 'admin') {
                header("Location: admin/index.php?page=activate");
            } elseif ($user['level'] == 'pustakawan') {
                header("Location: pustakawan/index.php?page=activate");
            }
        }

        $id = uniqid();
        $id_user = $user['id_user'];
        $sql = "INSERT INTO data_log(id_log, id_user, informasi) VALUES('$id', '$id_user', 'login')";
        mysqli_query($conn, $sql);
    } else {
        echo "<script>
            alert('Password yang Anda masukkan salah!');
            window.location.href='index.php?page=signin'
        </script>";
    }
} else {
    echo "<script>
        alert('Email yang Anda masukkan tidak ditemukan!');
        window.location.href='index.php?page=signin'
    </script>";
}

mysqli_close($conn);