<?php
include 'cone.php';

$email = $_POST['email'];
$pw = $_POST['pw'];
$cek = mysqli_query($conn, "SELECT `id`, `email`, `pw` FROM `user` WHERE email='$email'");


if (isset($_POST['daftar'])){
    if ($cek->num_rows == 0){
    
    $daftar = mysqli_query($conn, "INSERT INTO `user`(`id`, `email`, `pw`) VALUES (0,'$email','$pw')");

    if ($daftar){
        echo "<script>
        alert('regis berhasil');
        window.location.href='index.php';
        </script>";
    }else {
        echo "tidak berhasil";
    }
}else{
    echo "sudah ada";
}
}
?>