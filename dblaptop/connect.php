<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "data_laptop"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama_laptop = $_POST['nama_laptop'];
$merk_laptop = $_POST['merk_laptop'];
$jumlah = $_POST['jumlah'];

$sql = "INSERT INTO tabel_laptop (nama_laptop, merk_laptop, jumlah) VALUES ('$nama_laptop', '$merk_laptop', '$jumlah')";

if ($conn->query($sql) === TRUE) {
    echo "Data Laptop berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location: index.php");
exit();
?>
