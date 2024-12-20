<?php
$pass = "hema123";
$email = "hema@gmail.com";

// Variabel input
if (!empty($_POST['email']) && !empty($_POST['password'])) {
if ($_POST['email'] === $email && $_POST['password'] === $pass) {
  header("Location: simpan.php");
  exit();
 } else {
   header("Location: login.php");
   exit();
 }
} else {
   header("Location: login.php");
exit();
}