<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
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
    <form action="selesai.php" method="post">
        <label for="">Nama Barang</label>
        <input type="text" name="barang" required><br><br>
        <label for="">Harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="harga"><br><br>
        <button type="submit" name="baten">Belanja</button><br>
    </form>
</body>
</html>