<?php
$host  = "localhost";
$user  = "root";
$pass  = "";
$db    = "hema_belajar";

$koneksi = new mysqli($host, $user, $pass, $db);

// cek koneksi ke db
if($koneksi->connect_error){
    die("koneksingagal: ".$koneksi->connect_error);
}