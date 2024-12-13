<?php
if(isset($_POST['nama'])){
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $telpon = $_POST['telp'];

    $data = "Nama: $nama Email: $email Telp: $telpon\n";

    $file = "kontak.txt";
    file_put_contents($file, $data, FILE_APPEND);

    echo "Data berhasil disimpan!";
}else{

    
}