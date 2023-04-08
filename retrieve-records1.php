<?php
    $host = "localhost";
	$dbname = "id20559787_testnizadatak";
	$user = "id20559787_root";
	$password = "{}JBEWN[Ka&dzg~2";

    $connection = mysqli_connect($host, $user, $password, $dbname);
	if (mysqli_connect_errno()) {
		die("Connection error: " . mysqli_connect_error());
	}           		
	$sql = "SELECT * FROM upiti";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"]. "</td><td>" . $row["question"] . "</td></tr>";
        }
    }else{
        echo "0 results";
    }
    $connection->close();
?>