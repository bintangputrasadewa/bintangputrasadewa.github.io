<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];

    $insert_query = "INSERT INTO posttest5 (username, password) VALUES ('$newUsername', '$newPassword')";

    if ($conn->query($insert_query) === true) {
        header('Location: dashboardadmin.php');
        exit;
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}

if (isset($_POST['update'])) {
    $userId = $_POST['user_id'];
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];

    $update_query = "UPDATE posttest5 SET username = '$newUsername', password = '$newPassword' WHERE id = $userId";

    if ($conn->query($update_query) === true) {
        header('Location: dashboardadmin.php');
        exit;
    } else {
        echo "Error: " . $update_query . "<br>" . $conn->error;
    }
}

if (isset($_POST['delete'])) {
    $userId = $_POST['user_id'];

    $delete_query = "DELETE FROM posttest5 WHERE id = $userId";

    if ($conn->query($delete_query) === true) {
        header('Location: dashboardadmin.php');
        exit;
    } else {
        echo "Error: " . $delete_query . "<br>" . $conn->error;
    }
}

?>