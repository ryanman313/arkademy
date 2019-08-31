<!DOCTYPE html>
<html>
<head>
	<title>Project Database</title>
	<link rel="stylesheet" type="text/css" href="add.css">
</head>
<body>
<header class="Kepala">
	<nav>
		<div class="logo">
			<h1>Arkademy</h1>			
		</div>
		<div class="menu-atas">
			<label>Waktu Akses: 02 Agustus 2019</label>
			<button>Logout</button>
		</div>
	</nav>
	<div class="konten">
		<div class="menu-kiri">
			<img src="pic/foto.jpg">
			<br>
			<hr>
			<ul>
				<li><a href="database.php"><button><img src="pic/Control Panel.png"> Home</button></a></li><hr>
				<li><a href="data-pegawai.php"><button><img src="pic/Chrome.png">Data Pegawai</button></a></li><hr>
				<li><a href="data-pekerjaan.php"><button><img src="pic/Control Panel.png">Data Pekerjaan</button></a></li><hr>
				<li><a href="gaji-pegawai.php"><button><img src="pic/Chrome.png">Gaji Pegawai</button></a></li><hr>
				<li><a href="laporan.php"><button><img src="pic/Control Panel.png">Laporan</button></a></li>
			</ul>
		</div>
		<div class="menu-kanan">
			<h1>Admin</h1>
			<p>Selamat Datang Admin</p>
			<div class="add">
				<a href="add.php"><button>+Add</button></a>
			</div>
			<hr><br>
			<div class="form">
				<form action="add.php" method="post">
					<label>Masukan Nama :</label>
					<input type="text" name="nama" id="nama"><br>
					<label>Username :</label>
					<input type="text" name="user" id="user"><br>
					<label>Password	:</label>
					<input type="text" name="password" id="pass">
					<button name="save" type="submit">Daftar</button>
				</form>
				<?php
          				if(isset($_POST['save'])){
          					include 'koneksi.php';
          					$insert = mysqli_query($conn, "INSERT INTO login VALUES 
          						(NULL,
          							'".$_POST['nama']."',
          							'".$_POST['user']."',
          							'".$_POST['password']."')");
          					if ($insert) {
          						echo '<div class="alert alert-success alert-fill alert-close alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true"></span>
          </button> Pendaftaran Akun Berhasil </div>';;
          					}else{
          						echo "Daftar Gagal";
          					}
          				}
          			?>
			</div>	
		</div>
		</div>	
</header>
</body>
</html>