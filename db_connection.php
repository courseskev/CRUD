<?php 
	$servername = "";
	$username = "root";
	$password = "";
	
    try {
        $connection = new PDO ("mysql_host = $servername; dbname = CHANGE", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Succesfully connection";

    } catch (PDOException $e) {
        echo "Connection Failed: " . $e->getMessage();
    }
?>