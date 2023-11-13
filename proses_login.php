<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hubungkan ke database
    $conn = new mysqli("127.0.0.1", "root", "", "barang");

    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    // Query untuk memeriksa apakah username dan password cocok
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Jika data pengguna ditemukan, set session dan arahkan ke halaman selamat datang
        $_SESSION['username'] = $username;
        header("Location: input.php");
    } else {
        // Jika data pengguna tidak ditemukan, tampilkan pesan kesalahan
        echo "Login gagal. Silakan coba lagi.";
    }

    $conn->close();
} else {
    // Jika data POST tidak ditemukan, arahkan ke halaman login
    header("Location: login.html");
}
?>
