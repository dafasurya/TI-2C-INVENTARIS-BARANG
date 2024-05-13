<!DOCTYPE html>
<html>
<head>
    <title>Update Data Laptop</title>
</head>
<body>

<h2>Data Berhasil di Update!</h2>


<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "data_laptop"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_laptop = $_POST['nama_laptop'];
    $merk_laptop = $_POST['merk_laptop'];
    $jumlah = $_POST['jumlah'];


    $sql = "UPDATE tabel_laptop SET nama_laptop = '$nama_laptop', merk_laptop = '$merk_laptop', jumlah = '$jumlah' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo " ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>

<br>
<input type="button" value="Kembali ke Data Laptop" onclick="location.href='tampilData.php';"><br><br>

</body>
</html>