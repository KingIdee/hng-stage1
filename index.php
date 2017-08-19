<?php

$host = "localhost";
$dbname = "test_db";

$pdo = new PDO("mysql:host=$host;dbname=$dbname", "root", "");
$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
while ($data=$stmt->fetch(PDO::FETCH_ASSOC)){
	echo $data["name"];
}


?>
