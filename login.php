<form action="proses.php" method="post">
    <label>Email</label>
    <input type="email" name="email" placeholder="Masukkan Email">
    <br>

    <label>Password</label>
    <input type="password" name="password" placeholder="Masukkan Password">
    <br>

    <button type="submit">login</button>

</form>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<titel>Belajar PHP-GET dan POST</title>
</head>
<body>
<from action="proses.php" method="POST">
        <label>Email</label>
        <input type="email" name="email" placeholder="Masukan email" required>
        <br>
        <label>password</label>
        <input type="password" name="password" placeholder="Masukan password" required>
        <br>
        <button type="sumbit">Login</button>
</from>
<?php
if (isset($_GET['status']) && $_GET['status'] == 'gagal') {
    echo "<p style='color:red;'>email atau password salah!</p>";
}
?>
</body>
</html>s