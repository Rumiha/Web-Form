<!DOCTYPE html>
<html>
<head>
	<title>Testni Zadatak</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="caption">
        <h1>Općeniti Upiti</h1>
	</div>
	<div class="buttons" style="margin-top: 60px; margin-bottom: 80px;">
		<input type="button" class="mybutton" onclick="location.href='records2.php';" value="Narudžbe" />
	</div>
	<table id="mytable">
		<tr>
			<th>Ime i Prezime</th>
			<th>E-mail</th>
			<th>Upit</th>
		</tr>
		<?php include 'retrieve-records1.php'; ?>
	</table>
</body>
</html>