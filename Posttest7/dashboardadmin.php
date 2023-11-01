<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

date_default_timezone_set('Asia/Makassar');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DASHBOARD ADMIN</title>
    <link rel="stylesheet" type="text/css" href="./CSS/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar">
        <h1 style="flex: 1; text-align: center;">DASHBOARD ADMIN</h1>
        <div class="navbar-right">
            <a href="logout.php"><u>LOGOUT</u></a>
        </div>
    </nav>

    <h2 style="flex: 1; text-align: center;">Tambah User</h2>
    <form method="post" action="admin.php" enctype="multipart/form-data">
        <label for="new_username">Username</label>
        <input type="text" name="new_username" id="new_username" required>

        <label for="new_password">Password</label>
        <input type="password" name="new_password" id="new_password" required>

        <label for="gambar">Gambar Profil</label>
        <input type="file" name="gambar" id="gambar">

        <button type="submit" name="submit">Tambah</button>
    </form>

    <h2 style="flex:1; text-align:center;">Data User</h2>
    <div class="date-info">
        <p>Tanggal: <?php echo date('l, j F Y'); ?></p>
    </div>
    <div class="timezone-info">
        <p>Zona Waktu: Asia/Makassar</p>
    </div>
    <table>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $query = "SELECT * FROM posttest5";
        $result = $conn->query($query);
        while ($row = $result->fetch_assoc()) {
            if ($row['username'] === 'admin' && $row['password'] === 'admin') {
                continue;
            } else {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";

                // Tambahkan kondisi untuk memeriksa apakah ada gambar yang tersimpan
                if (!empty($row['gambar'])) {
                    echo '<td><img src="' . $row['gambar'] . '" alt="Gambar Profil" style="max-width: 100px; max-height: 100px;"></td>';
                } else {
                    echo "<td>Tidak ada gambar</td>";
                }

                echo '<td>
                <form method="post" action="admin.php" enctype="multipart/form-data">
                    <input type="hidden" name="user_id" value="' . $row['id'] . '">
                    <input type="text" name="new_username" placeholder="Edit Username" value="' . $row['username'] . ' " required>
                    <input type="password" name="new_password" placeholder="Edit Password" value="' . $row['password'] . ' "required>
                    <input type="file" name="gambar" id="gambar">
                    <button type="submit" name="update">Edit</button>
                    <button type="submit" name="delete">Hapus</button>
                </form>
            </td>';
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>