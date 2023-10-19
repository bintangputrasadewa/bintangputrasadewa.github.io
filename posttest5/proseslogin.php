<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    include 'koneksi.php';

    $sql = "SELECT * FROM posttest5 WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($username === 'admin' && $password === 'admin') {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: dashboardadmin.php'); 
            exit();
        } else {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: index.php'); 
            exit();
        }
    } else {
        // Login gagal
        echo "Gagal Login";
    }

    $conn->close();
}
?>