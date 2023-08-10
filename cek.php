<?php
include 'cone.php';

$email = $_POST['email'];
$pw = $_POST['pw'];

if (isset($_POST['baten'])){
    $cek = mysqli_query($conn, "SELECT `id`, `email`, `pw` FROM `user` WHERE email='$email' AND pw='$pw'");

    if ($cek->num_rows > 0){
        echo "<script>
        alert('Selamat Akun Anda Sudah Login');
        window.location.href='wel.php';
        </script>";
    }else {
        echo "Anda Harus Mendaftarkan Akun";
    }
}
?>