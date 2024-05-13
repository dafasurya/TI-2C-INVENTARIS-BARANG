<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data Laptop</title>
</head>
<body>

<h2>Data Laptop</h2>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Laptop</th>
        <th>Merek</th>
        <th>jumlah</th>
        <th>Aksi</th>
    </tr>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "data_laptop"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "SELECT id, nama_laptop, merk_laptop, jumlah FROM tabel_laptop";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nama_laptop"] . "</td>";
            echo "<td>" . $row["merk_laptop"] . "</td>";
            echo "<td>" . $row["jumlah"] . "</td>";
            echo "<td>";
            echo "<a href='edit_data.php?id=" . $row["id"] . "'>Edit</a> | ";
            echo "<a href='hapus_data.php?id=" . $row["id"] . "' onclick=\"return confirm('Anda yakin ingin menghapus data ini?');\">Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
    }

    $conn->close();
    ?>

</table>
<br>
<input type="button" value="Kembali" onclick="location.href='index.php';"><br><br>

</body>
</html>
