<!DOCTYPE html>
<html>
<head>
    <title>Input Data Laptop</title>
</head>
<body>

<h2>Input Data Laptop</h2>

<form method="post" action="connect.php">
    <label>Nama Laptop:</label><br>
    <input type="text" name="nama_laptop" required><br><br>
    
    <label>Merek:</label><br>
    <input type="text" name="merk_laptop" required><br><br>
    
    <label>Jumlah:</label><br>
    <input type="number" name="jumlah" required><br><br>
    
    <input type="submit" value="Simpan">
    <input type="button" value="List Laptop" onclick="location.href='tampilData.php';"><br><br>
</form>
<title>Tampil Data Laptop</title>
    

</body>
</html>
