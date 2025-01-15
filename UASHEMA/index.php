<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<title>
   Hemadanda faranlita</title>
<body>
    <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">Bimbel TNI/Polri</span>
        </div>
    </nav>
<div class="container">
    <br>
    <h4><center>DAFTAR PESERTA BIMBEL</center></h4>
    <?php session_start(); ?>
        
        <?php if(isset($_SESSION['pesan'])) : ?>
            <div class="alert alert-dismissible mt-3 alert-<?= $_SESSION['status'] ?>" style="width:30%">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Berhasil!</strong>
                <?= $_SESSION['pesan'] ?>
            </div>
        <?php endif; ?>
        
        <?php unset($_SESSION['pesan']) ?>
<?php

    include "koneksi.php";

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['id_peserta'])) {
        $id_peserta=htmlspecialchars($_GET["id_peserta"]);

        $sql="delete from peserta where id_peserta='$id_peserta' ";
        $hasil=mysqli_query($kon,$sql);

        //membuat session
        $_SESSION['pesan'] = "Data peserta berhasil dihapus";
        $_SESSION['status'] = "danger";

        //Kondisi apakah berhasil atau tidak
                header("Location:index.php");

    }
?>


     <tr class="table-danger">
            <br>
        <thead>
        <tr>
       <table class="my-3 table table-bordered">
            <tr class="table-primary">           
            <th>No</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>TTL</th>
            <th>Telpon</th>
            <th>Email</th>
            <th>Paket</th>

        </tr>
        </thead>

        <?php
        include "koneksi.php";
    
        $sql="select * from calon_peserta order by No desc";
        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["sekolah"];   ?></td>
                <td><?php echo $data["jurusan"];   ?></td>
                <td><?php echo $data["no_whatsapp"];   ?></td>
                <td><?php echo $data["alamat"];   ?></td>
                <td>
                    <a href="update.php?id_peserta=<?php echo htmlspecialchars($data['id_peserta']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_peserta=<?php echo $data['id_peserta']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
    <button><a href="logout.php">Logout</a></button>
</div>
</body>
</html