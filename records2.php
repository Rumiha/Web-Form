<!DOCTYPE html>
<html>
<head>
	<title>Testni Zadatak</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="caption">
        <h1>Narudžbe</h1>
	</div>
	<div class="buttons" style="margin-top: 60px; margin-bottom: 80px;">
		<input type="button" class="mybutton" onclick="location.href='records1.php';" value="Općeniti Upiti" />
	</div>
	<table id="mytable">
		<tr>
			<th>Ime i Prezime</th>
			<th>E-mail</th>
			<th>Adresa</th>
			<th>OIB</th>
			<th>Napomena</th>
			<th>Paket</th>
		</tr>
		<?php include 'retrieve-records2.php'; ?>
	</table>
</body>
</html>