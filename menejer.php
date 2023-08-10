<?php
include 'cone.php';

$transaksi = $_POST['transaksi'];
$harga = $_POST['harga'];
$cekk = mysqli_query($conn, "SELECT `id`, `transaksi`, `harga` FROM `manajer` WHERE transaksi='$transaksi'");

if (isset($_POST['transaksi'])){
    if ($cekk->num_rows == 0){
    
    $belanja = mysqli_query($conn, "INSERT INTO `manajer`(`id`, `transaksi`, `harga`) VALUES (0,'$transaksi','$harga')");

    if ($belanja){
        echo "<script>
        alert('Anda Sudah Membeli Barang Ini');
        window.location.href='selesai.php';
        </script>";
    }else {
        echo "Succes";
    }
}else{
    echo "sudah ada";
}
}
?>