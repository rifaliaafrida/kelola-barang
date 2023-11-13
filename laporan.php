<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Kain</title>
    <link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="./hh.css" />
</head>
<body>
    <sidebar-header></sidebar-header>
    <div class="tabel">
        <table>
            <script>

function filterTable(status) {
    var table, tr, td, i;
    table = document.querySelector("table");
    tr = table.getElementsByTagName("tr");

    // Loop melalui semua baris tabel, mulai dari baris kedua (indeks 1)
    for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3]; // Kolom status berada di indeks 3

        if (status === "Semua" || td.innerHTML.toUpperCase() === status.toUpperCase()) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}

</script>
            <p class="text-laporan">Laporan</p>
    <div class="filter-buttons">
    <button onclick="filterTable('Semua')" id="filter">Semua</button>
    <button onclick="filterTable('masuk')" id="filter">Masuk</button>
    <button onclick="filterTable('keluar')" id="filter">Keluar</button>
    <button onclick="filterTable('dipacking')" id="filter">Dipacking</button>
</div>


            <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Nama Kain</th>
            <th>Status</th>
            <th colspan="1" id="standar">Standard</th>
            <th>No Packing</th>
            <th>Keterangan</th>
            <th>Roll</th>
            <th>Quantity</th>
            <th>Satuan</th>
            <th>Aksi</th>
            
        </tr>       
    </div>
        <?php
        // Ambil data dari database dan tampilkan dalam tabel
        $koneksi = mysqli_connect("127.0.0.1", "root", "", "barang");
        
        if (mysqli_connect_error()) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM data_kain";
        $result = mysqli_query($koneksi, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['tanggal'] . "</td>";
            echo "<td>" . $row['nama_kain'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>" . $row['standard'] . "</td>";
            echo "<td>" . $row['no_packing'] . "</td>";
            echo "<td>" . $row['keterangan'] . "</td>";
            echo "<td>" . $row['roll'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['satuan'] . "</td>";
            echo "<td><button class='edit-button'>Edit</button> <button class='hapus-button'>Hapus</button></td>";
            echo "</tr>";
        }

        mysqli_close($koneksi);
        ?>
    </table>
    <script src="./components/side.js">
    
    </script>
</body>
</html>
