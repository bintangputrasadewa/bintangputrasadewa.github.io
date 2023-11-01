<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];

    if ($_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
        $gambarName = $_FILES['gambar']['name'];
        $gambarTmpName = $_FILES['gambar']['tmp_name'];

        // Membuat nama file baru dengan format yyyy-mm-dd nama-file.ekstensi
        $currentDate = date('Y-m-d');
        $fileNameParts = explode('.', $gambarName); // Memisahkan nama file dan ekstensi
        $fileExtension = end($fileNameParts); // Mendapatkan ekstensi file
        $newFileName = $currentDate . ' ' . $newUsername . '.' . $fileExtension; // Menggabungkan nama file baru

        $gambarPath = 'img/data/' . $newFileName;

        move_uploaded_file($gambarTmpName, $gambarPath);
    } else {
        $gambarPath = null;
    }

    $insert_query = "INSERT INTO posttest5 (username, password, gambar) VALUES ('$newUsername', '$newPassword', '$gambarPath')";

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

    // Mendapatkan path gambar yang lama sebelum update
    $query = "SELECT gambar FROM posttest5 WHERE id = $userId";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $oldGambarPath = $row['gambar'];

    $gambarPath = null;

    if ($_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
        $gambarName = $_FILES['gambar']['name'];
        $gambarTmpName = $_FILES['gambar']['tmp_name'];

        // Membuat nama file baru dengan format yyyy-mm-dd nama-file.ekstensi
        $currentDate = date('Y-m-d');
        $fileNameParts = explode('.', $gambarName); // Memisahkan nama file dan ekstensi
        $fileExtension = end($fileNameParts); // Mendapatkan ekstensi file
        $newFileName = $currentDate . ' ' . $newUsername . '.' . $fileExtension; // Menggabungkan nama file baru

        $gambarPath = 'img/data/' . $newFileName;

        move_uploaded_file($gambarTmpName, $gambarPath);

        // Hapus gambar lama jika ada
        if (!empty($oldGambarPath)) {
            unlink($oldGambarPath);
        }
    }

    $update_query = "UPDATE posttest5 SET username = '$newUsername', password = '$newPassword'";

    if (!empty($gambarPath)) {
        $update_query .= ", gambar = '$gambarPath'";
    }

    $update_query .= " WHERE id = $userId";

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