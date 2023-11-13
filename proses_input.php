<?php
// Koneksi ke database
$koneksi = mysqli_connect("127.0.0.1", "root", "", "barang");

// Periksa koneksi
if (mysqli_connect_error()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Terima data dari form
$nama_kain = $_POST['nama_kain'];
$status = $_POST['status'];
$standard = $_POST['standard'];
$tanggal = $_POST['tanggal'];
$no_packing = $_POST['no_packing'];
$keterangan = $_POST['keterangan'];
$roll = $_POST['roll'];
$quantity = $_POST['quantity'];
$satuan = $_POST['satuan'];
$tambah = $_POST['tambah'];

// Simpan data ke database
$query = "INSERT INTO data_kain (nama_kain, status, standard, tanggal, no_packing, keterangan, roll, quantity, satuan, tambah) VALUES ('$nama_kain', '$status', '$standard', '$tanggal', '$no_packing', '$keterangan', '$roll', '$quantity', '$satuan', '$tambah')";

if (mysqli_query($koneksi, $query)) {
    echo("Berhasil Disimpan!!");
    header("Location: Input.php");
} else {
    header("Location: index.html");
}

// Mengasumsikan 'tambah' adalah nama kolom dari data yang ingin kamu ambil
?>

