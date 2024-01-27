<?php

    $koneksi = mysqli_connect("localhost", "root", "", "publicspeaking");

    if (mysqli_connect_errno()) {
        echo "Koneksi gagal ke database: ".mysqli_connect_error();
    }
?>