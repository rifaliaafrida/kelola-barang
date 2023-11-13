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
            echo "<td>" . $row['nama_kain'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>" . $row['standard'] . "</td>";
            echo "<td>" . $row['tanggal'] . "</td>";
            echo "<td>" . $row['no_packing'] . "</td>";
            echo "<td>" . $row['keterangan'] . "</td>";
            echo "<td>" . $row['roll'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['satuan'] . "</td>";
            echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='hapus.php?id=" . $row['id'] . "'>Hapus</a></td>";
            echo "</tr>";
        }

        mysqli_close($koneksi);
        ?>