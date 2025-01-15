
<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
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
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_peserta
    if (isset($_GET['id'])) {
        $id=input($_GET["id"]);

        $sql="select * from calon_peserta where id=$id";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);


    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id=htmlspecialchars($_POST["id"]);
        $nama=input($_POST["nama"]);
        $asal=input($_POST["asal"]);
        $ttl=input($_POST["ttl"]);
        $telpon=input($_POST["telpon"]);
        $email=input($_POST["email"]);
        $paket=input($_POST["paket"]);

        //Query update data pada tabel anggota
        $sql="update calon_peserta set
			nama='$nama',
			asal='$asal',
		    ttl='$ttl',
			telpon='$telpon',
			email='$email',
			paket='$paket'
			where id=$id";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>