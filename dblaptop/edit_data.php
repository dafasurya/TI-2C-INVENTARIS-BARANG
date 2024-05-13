<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Laptop</title>
</head>
<body>

<h2>Edit Data Laptop</h2>

<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "data_laptop"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tabel_laptop WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>

        <form method="post" action="update_data.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label>Nama Laptop:</label><br>
            <input type="text" name="nama_laptop" value="<?php echo $row['nama_laptop']; ?>" required><br><br>
            
            <label>Merek:</label><br>
            <input type="text" name="merk_laptop" value="<?php echo $row['merk_laptop']; ?>" required><br><br>
            
            <label>Tahun Laptop:</label><br>
            <input type="number" name="jumlah" value="<?php echo $row['jumlah']; ?>" required><br><br>
            
            <input type="submit" value="Simpan Perubahan">
        </form>

        <?php
    } else {
        echo "Data Laptop tidak ditemukan.";
    }
} else {
    echo "Parameter ID tidak diberikan.";
}

$conn->close();
?>

<br>
<input type="button" value="Kembali ke Data Laptop" onclick="location.href='tampilData.php';"><br><br>

</body>
</html>
