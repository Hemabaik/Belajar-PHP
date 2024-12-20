!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From login</title>
</head>
<body>
    <br>
    <h2>login</h2>
<form action="proses.php" method="POST">
    <label>Email</label> 
    <input type="email" name="email" placeholder="Masukan email" required>
    <br>
    <label>password</label>
    <input type="password" name="password" placeholder="Masukan password" required>
    <br>
    <button type="submit">Login</button>
</form>
<?php
if (isset($_GET['status']) && $_GET['status'] == 'gagal') {
    echo "<p style='color:red;'>email atau password salah!</p>";
}
?>
</body>
</html>