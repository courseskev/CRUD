<?php 
	$servername = "192.168.1.10";
	#$username = "root";
    $username = "clase";
	$password = "12345678";
    $dbname = "test";
	
    try {
        $connection = new PDO ("mysql_host = $servername; dbname = $dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Succesfully connection";

    } catch (PDOException $e) {
        echo "Connection Failed: " . $e->getMessage();
    }
?>