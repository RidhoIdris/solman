<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Solman Manunggal Informatika</title>
</head>
<body>
	<h1>Tes Solman Manunggal Informatika</h1>
	<form action="" method="POST">
		<label>Masukan Angka Mulai</label>
		<input type="number" name="mulai"><br><br>
		<label>Masukan Angka Akhir</label>
		<input type="number" name="akhir"><br><br>
		<button name="hitung" type="input">Hitung</button><br><br>
	</form>
</body>
</html>

<?php 

if (isset($_POST['hitung'])) {
	
for ($i=$_POST['mulai']; $i <= $_POST['akhir']; $i++) { 

$pecah   = str_split($i);

	$data[] = $i + array_sum($pecah);	
	if (!in_array($i, $data)) {
		$a[] = $i;
		echo $i."<br>";
	}

	}
}
echo "_______________ + <br>";
echo number_format(array_sum($a),0,".",".") ;
 ?>

