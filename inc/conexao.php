<?php
try {
	$username = "root";
	$password = "";
    $PDO = new PDO('mysql:host=localhost;dbname=academia', $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
