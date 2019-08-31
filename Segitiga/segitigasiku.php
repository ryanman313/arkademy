<!DOCTYPE html>
<html>
<head>
	<title>Membuat segitiga</title>
</head>
<body>
	<form action="segitigasiku.php" method="post">
		<label for="input">Masukan nilai</label>
		<input type="text" name="input" id="input">
		<button type="submit">Proses</button>
	</form><br><br>
	<?php
		if (isset($_POST['input'])) {
		 	$input = $_POST['input'];
		 	for ($i=0; $i <$input ; $i++) { 
		 			for ($j=0; $j <=$i ; $j++) { 
		 				echo "*";
		 			}
		 			echo "<br/>";
		 		}
		 } 
	 ?>
</body>
</html>