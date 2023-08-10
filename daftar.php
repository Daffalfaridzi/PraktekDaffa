<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR</title>
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
    <form action="regis.php" method="post">
        <label for="">Email &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="email" name="email" required><br><br>
        <label for="">Password</label>
        <input type="password" name="pw" required><br><br>
        <button type="submit" name="daftar">daftar</button>
    </form>
</body>
</html>