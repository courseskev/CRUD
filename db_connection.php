<?php 	
    $servername = "localhost";
    $username = "other";
	$password = "12345678";
    $dbname = "test";
	
    try {
        $dsn = 'mysql:host=192.168.1.23; dbname = test';
        $connection = new PDO ($dsn, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Succesfully connection <br><br><br>";

    } catch (PDOException $e) {
        echo "Connection Failed: " . $e->getMessage();
    }
?>