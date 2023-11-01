<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTRASI</title>
	<link rel="stylesheet" type="text/css" href="./CSS/login.css">
</head>
<body>
<div class="container">
        <h2>Login</h2>
        <form action="proseslogin.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required placeholder="Masukkan username">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required placeholder="Masukkan password">
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="daftar">
            <p>Belum Punya Akun? <a href="register.php">Registrasi</a></p>
        </div>
    </div>
</body>
</html>