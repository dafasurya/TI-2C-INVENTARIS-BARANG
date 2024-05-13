<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data Laptop</title>
</head>
<body>

<h2>Hapus Data Laptop</h2>

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

    $sql = "DELETE FROM tabel_laptop WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
