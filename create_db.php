<?php
    // integrasi koneksi
    require_once("connection.php");
    //buat database baru
    $sql = "CREATE DATABASE highland_roastery";
    if ($conn->query($sql) === true) {
        echo "<br>";
        echo "Database Berhasil dibuatkan";
    }else{
        echo "Database gagal tidak berhasil dibuatkan" . $conn->error;
    }