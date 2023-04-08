<?php
	$host = "localhost";
	$dbname = "id20559787_testnizadatak";
	$user = "id20559787_root";
	$password = "{}JBEWN[Ka&dzg~2";

	$connection = mysqli_connect($host, $user, $password, $dbname);
	if (mysqli_connect_errno()) {
		die("Connection error: " . mysqli_connect_error());
	}           		
	$sql = "INSERT INTO upiti(name, email, question) VALUES(?, ?, ?)";
	$stmt = mysqli_stmt_init($connection);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		die(mysqli_error($connection));
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$question = $_POST['question'];

	mysqli_stmt_bind_param($stmt, "sss", $name, $email, $question);
	mysqli_stmt_execute($stmt);

	$current_datetime = 
	$mailbody = "Novi Upit\n\n" . date("H:i:s  d-m-Y") . "\n\nIme i prezime:  " . $name . "\nE-mail:  " . $email . "\nUpit:  " . $question; 
	mail("overmcpro@gmail.com", "Testni Zadatak - Petar Rumiha", $mailbody);

	header("submitted.html");
	exit();
?>