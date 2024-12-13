<?php
$pass   ="hema123";
$email  ="hema@gmail";

if($_POST['email']!="" and $_POST['Password']!=""){

    if($_POST['email']==$email){
        if($_POST['password']==$pass){
            echo "Login Berhasil";
        }else{
            echo "Password Yang Anda Masukkan Salah!!";
        }
    }else{
        echo "Password Yang Anda Masukkan Salah!!";
    }
}else{
    echo "Maukkan Email dan Password";
}
