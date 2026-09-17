<?php

session_start();

include "config/koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM pengguna 
        WHERE email = '$email' 
        AND password = '$password'";

$hasil = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($hasil) > 0) {

    $data = mysqli_fetch_assoc($hasil);

    $_SESSION['login'] = true;
    $_SESSION['pengguna_id'] = $data['pengguna_id'];
    $_SESSION['nama_pengguna'] = $data['nama_pengguna'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['peran'] = $data['peran'];

    header("Location: dashboard.php");
    exit;

} else {

    header("Location: login.php?pesan=gagal");
    exit;

}

?>