<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="viewport" content="width=device-width, initial-scale=1">
	<title>JAMBRED STORE</title>
	<link rel="stylesheet" type="text/css" href="./CSS/style.css">
	<link rel="stylesheet" type="text/css" href="./CSS/isi.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<script src="./JavaScript/style.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body class="lightmode">
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<?php include 'header.php'?>	

	<section class="banner">
		<h2><a href="#belanja">WELCOME TO MY JAMBRED STORE</a></h2>
	</section>

	<section id="about">
        <div class="about">
            <div class="abouttext">
                <h3>About Me</h3>
                <p> Kenalinn nihh Pemilik Dari JAMBRED STORE . . . <br>
					Namaku Bintang Putra Sadewa, seorang Mahasiswa asal Universitas Mulawarman yang mengambil jurusan Informatika dan saat ini sudah semester 3. Saat ini mempunyai minat yang kuat dalam Game Developer. Saya memiliki dedikasi yang tinggi untuk mempelajari software untuk membuat game dan suatu hari saya akan mengembangkan game saya sendiri. Oiyaa sampai lupa nihh.. Kenapa namanya JAMBRED STORE.. JAMBRED STORE merupakan singkatan dari Jam Branded Store jadi bukan karena Jambret yg mengambil barang orang yahh :3
                </p>
            </div>
        </div>
	</section>

	<section id="service">
		<div class="container">
			<h3>SERVICE</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fas fa-mobile"></i></div>
					<h4>MOBILE APP</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-globe"></i></div>
					<h4>WEB DEVELOPER</h4>
				</div><div class="col-4">
					<div class="icon"><i class="fas fa-edit"></i></div>
					<h4>DESIGN</h4>
				</div><div class="col-4">
					<div class="icon"><i class="fas fa-chart-bar"></i></div>
					<h4>GAME DEVELOPER</h4>
				</div>
			</div>
		</div>
	</section> 
		
	<section id = "belanja">
		<selection class="gambargerak">
			<div align="center">
				<marquee width ="1200">
					<img src="img/1.jpeg" height="100">
					<img src="img/2.jpeg" height="100">
					<img src="img/3.jpeg" height="100">
					<img src="img/4.jpeg" height="100">
					<img src="img/5.jpeg" height="100">
					<img src="img/6.jpeg" height="100">
					<img src="img/7.jpeg" height="100">
					<img src="img/8.jpeg" height="100">
					<img src="img/9.jpeg" height="100">
					<img src="img/10.jpeg" height="100">
					<img src="img/11.jpeg" height="100">
					<img src="img/12.jpeg" height="100">
					<img src="img/13.jpeg" height="100">
				</marquee>
			</div>
		</selection>

		<div class="rekomendasi">
			<h3>REKOMENDASI</h3>
		</div>

		<div class="gambar">

			<div class="foto">
				<img src="img/01.-LER-Galaxy-Front-alt.jpg">
				<h2>Lunar Eclipse Rubber Of Galaxy</h2>
				<p>Rp.10.000.000,00</p> <br>
				<a href="">Buy Now</a>
			</div>

			<div class="foto">
					<img src="img/01.-TEL-Helium-Front-alt.jpg">
					<h2>Time Explorer Leather of Helium</h2>
					<p>Rp.25.000,00</p> <br>
					<a href="">Buy Now</a>
			</div>

			<div class="foto">
					<img src="img/SEAHORSE.jpg">
					<h2>Seahorse Queen of Pollux</h2>
					<p>Rp.30.000,00</p> <br>
					<a href="">Buy Now</a>
			</div>
			<div class="foto">
				<img src="img/02_Seahorse-King-Of-Beowulf-Front.jpg">
				<h2>Seahorse King of Beowulf</h2>
				<p>Rp.30.999.999,00</p><br>
				<a href="">Buy Now</a>
			</div>
		</div>
	</section>

		<section id="contact">
			<div class="container">
				<h3>Comment</h3>
				<form id="contact-form" action="#" method="post">
					<div class="form-group">
						<label for="nama">Nama:</label>
						<input type="text" id="nama" name="nama" required>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" id="email" name="email" required>
					</div>
					<div class="form-group">
						<label for="komentar">Komentar:</label>
						<textarea id="komentar" name="komentar" rows="4" required></textarea>
					</div>
					<button type="submit" onclick="tampilkanPopUp()">Kirim</button>
				</form>
			</div>
		</section>

	</section>

	<?php include 'footer.php'?>

</body>
</html>