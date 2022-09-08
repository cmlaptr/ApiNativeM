<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$database = "apinative";

$koneksi = mysqli_connect($host_db, $user_db, $pass_db, $database);

if (!$koneksi) {
    die(mysqli_connect_error());
}
// echo "berhasil konek";

?>