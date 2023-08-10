<?php
$db = "aplikasi";
$server = "localhost";
$unsur = "root";
$pww = "";

$conn = mysqli_connect($server, $unsur, $pww, $db);
if (!$conn){
    echo "gagal connect";
}
?>