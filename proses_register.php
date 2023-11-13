<?php
$host = "127.0.0.1"; // Ganti dengan host MySQL Anda
$user = "root"; // Ganti dengan username MySQL Anda
$pass = ""; // Ganti dengan password MySQL Anda
$dbname = "barang"; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $user, $pass, $dbname);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($koneksi, $query)) {
        header('Location: login.html'); // Ganti dengan halaman yang sesuai
    } else {
        echo "Registrasi gagal. Silakan coba lagi.";
    }
}
?>
