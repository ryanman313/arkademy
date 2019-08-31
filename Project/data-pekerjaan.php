<!DOCTYPE html>
<html>
<head>
	<title>Data pekerjaan</title>
	<link rel="stylesheet" type="text/css" href="pekerjaan.css">
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
			<hr><br>	
			<div class="data-a">
				<h3>Data Pekerjaan</h3>
				<div class="atas-a">
					<input type="text" name="cari">
					<button>Cari</button>
				</div>
				<table class="isi-data">
					<thead>
						<tr>
							<th class="no">No</th>
							<th>Nama</th>
							<th>J/K</th>
							<th>NIK</th>
							<th>Alamat</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td >1</td>
							<td>Jono</td>
							<td>Laki-laki</td>
							<td>0360303244498</td>
							<td>Jl.printis, N0 12/15 cikokol</td>
						</tr>
					</tbody>
				</table>
				<hr>
			</div>
			
			
			</div>
		</div>
</header>
</body>
</html>