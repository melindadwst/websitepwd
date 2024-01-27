<?php
$koneksi = mysqli_connect("localhost","root","","publicspeaking");
if(mysqli_connect_errno()){
    echo "koneksi gagal terhubung dengan database:".mysqli_connect_error();
}
?>