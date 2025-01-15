<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $asal=input($_POST["asal"]);
        $TTL=input($_POST["ttl"]);
        $telpon=input($_POST["telpon"]);
        $email=input($_POST["email"]);
        $paket=input($_POST["paket"]);

        //Query input menginput data kedalam tabel anggota
        $sql = "INSERT INTO calon_peserta (nama, asal, ttl, telpon, email, paket) 
        VALUES ('$nama', '$asal', '$TTL', '$telpon', '$email', '$paket')";

        //Mengeksekusi/menjalankan query diatas
        $hasil = mysqli_query($kon, $sql);

    // Cek apakah berhasil atau tidak
    if ($hasil) {
        $_SESSION['status'] = 'Data berhasil ditambahkan.';
        $_SESSION['status_type'] = 'success';
    } else {
        $_SESSION['status'] = 'Data gagal ditambahkan.';
        $_SESSION['status_type'] = 'danger';
    }

    header("Location:index.php");

    }
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
        </div>

        <div class="form-group">
            <label for="asal">Asal:</label>
            <input type="text" name="asal" class="form-control" placeholder="Masukkan Nama Sekolah" required>
        </div>

        <div class="form-group">
            <label for="ttl">Tanggal Lahir:</label>
            <input type="date" name="ttl" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="telpon">Nomor Telepon:</label>
            <input type="text" name="telpon" class="form-control" placeholder="Masukkan No HP" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
        </div>

        <div class="form-group">
            <label for="paket">Paket:</label>
            <input type="text" name="paket" class="form-control" placeholder="Masukkan Paket" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>