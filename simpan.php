<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titel>Belajar PHP-GET dan POST</title>
</head>
<body>
    <from action="simpan.php" method="POST">
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukan Nama" required>
        <br>
        <label>Email</label>
        <input type="email" name="email" placeholder="Masukan Email" required>
        <br>
        <label>telepon</label>
        <input type="text" name="telp" placeholder="Masukan Telepon" requider>
        <br>
        <butoon type="sumbit">Simpan Data</butoon>
</from>

<?php
if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['telp'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telp'];

    $data = "Nama: $nama, Email: $email, Telp: $telepon\n";

    $file = "kontak.txt";
if (file_put_contents($file, $data, FILE_APPEND)) {
    echo "<p style='color:green;'>Data Berhasil Disimpan</p>";
 } else {
    echo "<p style='color:red;'>Gagal menyimpan data</p>";
 }
}
?>
</body>
</html>