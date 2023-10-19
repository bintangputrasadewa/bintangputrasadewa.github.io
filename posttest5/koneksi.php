<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = ""; //
    $db_name = "posttest5";

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }
?>