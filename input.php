<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css" />
    <title>Document</title>
</head>
<body>
    <sidebar-header></sidebar-header>
    <div class="form">
        <form action="proses_input.php" method="post" class="in">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal">
            <br>
            <label for="nama_kain">Nama Kain:</label>
            <input type="text" name="nama_kain" id="nama_kain">
            <br>
            <label for="satuan">Status:</label>
            <select name="status">
                <option value="masuk"> Barang Masuk</option>
                <option value="keluar">Barang Keluar</option>
                <option value="dipacking">Barang Dipacking</option>
            </select >
            <br>
            <label for="packing">No Packing List:</label>
            <input type="text" name="no_packing" id="no_packing">
            <br>
            <label for="keterangan">Katerangan:</label>
            <input type="text" name="keterangan" id="keterangan">
            <br>
            <label for="roll">Roll:</label>
            <input type="text" name="roll" id="roll">
            <br>
            <label for="kuantitas">Quantity:</label>
            <input type="text" name="kuantitas" id="kuantitas">
            <br>
            <label for="satuan">Satuan:</label>
            <input type="text" name="satuan" id="satuan">
            <br>
            <label for="standar">Nama Standard:</label>
            <select name="standard">
                <?php
                // Sambungkan ke database, lakukan query, dan ambil data
                $koneksi = mysqli_connect("127.0.0.1", "root", "", "barang");
                $query = "SELECT tambah FROM data_kain";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['tambah'] . "'>" . $row['tambah'] . "</option>";
            }
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }

        mysqli_close($koneksi); // Tutup koneksi setelah selesai
        ?>
    </select>
            <label for="tambah">Tambah Standar:</label>
            <input type="text" name="tambah" placeholder="isi jika standard tidak ada di daftar nama standard"id="tambah">
<br>
<input type="submit" value="Simpan Data">
<button  id="Tambah">Tambah Standard</button>

</form>
</div>
<script src="./components/side.js"></script>


</body>
</html>