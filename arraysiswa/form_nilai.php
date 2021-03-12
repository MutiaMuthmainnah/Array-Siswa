<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
	<fieldset>
		<legend>Form Nilai</legend>
	<form method="GET" action="array_siswa.php">
		Nama : <br>
		<input type="text" name="nama" value="" size="30"/><br/>
		Mata Kuliah :<br>
		<select id="matkul" name="matkul">
			<option value="DDP">Dasar-Dasar Pemrograman</option>
			<option value="BDI">Basis Data I</option>
			<option value="WEB1">Pemrograman Web</option>
		</select><br/>
		Nilai UTS : <br>
		<input type="text" id="nilai_uts" name="nilai_uts" value=""
		size="6"/><br/>
		Nilai UAS : <br>
		<input type="text" id="nilai_uas" name="nilai_uas" value=""
		size="6"/><br/>
		Nilai Tugas/Praktikum : <br>
		<input id="nilai_tugas" type="text" name="nilai_tugas"
		value="" size="6"/><br/>
		<input type="submit" value="Simpan" name="proses"/>
	</form>
	</fieldset>
</body>
</html>