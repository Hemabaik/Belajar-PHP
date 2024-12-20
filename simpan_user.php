<?php
include "koneksi.php";
if(isset($_POST['nama'])){
    $nama       = $_POST['nama'];
    $email      = $_POST['email'];
    $telpon     = $_POST['telp'];
    $password   = md5($_POST['pass']);
    $created_at = date("Y-m-d H:i:s");

    $simpan = $koneksi->query("INSERT INTO table_user (Nama,Nomor_Hp,email,Password,Created_at) VALUES ('$nama','$telpon','$email','$password','$created_at')");
    
    if($simpan){
        header("location:user.php?s=berhasil");
    }else{
        echo $koneksi->error;
        // header("location:user.php?s=gagal");
    }
}else{

}