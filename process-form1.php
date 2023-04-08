<?php
	$host = "localhost";
	$dbname = "id20559787_testnizadatak";
	$user = "id20559787_root";
	$password = "{}JBEWN[Ka&dzg~2";

	$connection = mysqli_connect($host, $user, $password, $dbname);
	if (mysqli_connect_errno()) {
		die("Connection error: " . mysqli_connect_error());
	}           		
	$sql = "INSERT INTO narudzbe(name, email, address, oib, package, note) VALUES(?, ?, ?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($connection);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		die(mysqli_error($connection));
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$oib = $_POST['oib'];
	$note = $_POST['note'];
	$package = $_POST['package'];

	mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $address, $oib, $package, $note);
	mysqli_stmt_execute($stmt);

	$mailbody = "Nova Narudžba\n\n" . date("H:i:s  d-m-Y") . "\n\nIme i prezime:  " . $name . "\nE-mail:  " . $email . "\nAdresa:  " . $address . "\nOIB:  " . $oib . "\nNapomena:  " .$note . "\nPaket:  " . $package; 
	mail("overmcpro@gmail.com", "Testni Zadatak - Petar Rumiha", $mailbody);

	header("submitted.html");
	exit();
?>