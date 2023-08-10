<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<style>
    body{
    background: grey;
}

button{
    background: #4CAF50;
    color: #fff;
}
</style>
<body>
    <form action="cek.php" method="post">
        <label for="">Email &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="email" name="email" required><br><br>
        <label for="">Password</label>
        <input type="password" name="pw" required><br><br>
        <button type="submit" name="baten">login</button><br>
        <label for="">Belum punya akun? <a href="daftar.php">klik disini</a></label>
    </form>
</body>
</html>
