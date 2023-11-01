<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTRASI</title>
	<link rel="stylesheet" type="text/css" href="./CSS/register.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <h2>REGISTRASI</h2>
        <form action="prosesregister.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required placeholder="Masukkan Username Baru">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required placeholder="Masukkan Password Baru">
            </div>
            <div class="input-group">
                <label for="confirm_password">Konfirmasi Password</label>
                <input type="password" name="confirm_password" id="confirm_password" required placeholder="Konfirmasi Password">
            </div>
            <button type="submit" class="btn">Daftar</button>
        </form>
        <div class="login">
            <p>Sudah Punya Akun? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>