<?php

// integrasi koneksi
require_once("connection.php");

// membuat tabel baru di database
// sql to create table
    $sql = "CREATE TABLE taem (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_depan VARCHAR(30) NOT NULL,
    nama_belakan VARCHAR(30) NOT NULL,
    alamat_email VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table taem created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();