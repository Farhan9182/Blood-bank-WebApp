<?php

$host     = "localhost";//Ip of database, in this case my host machine    
$user     = "root";	//Username to use
$pass     = "";//Password for that user
$dbname   = "blood-bank";//Name of the database

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
  echo $e->getMessage();                         
}

// $stm = $pdo->prepare("SELECT * FROM countries WHERE id = ?");
// $stm->bindValue(1, $id);
// $stm->execute();

// $row = $stm->fetch(PDO::FETCH_ASSOC);

// echo "Id: " . $row['id'] . PHP_EOL;
// echo "Name: " . $row['name'] . PHP_EOL;
// echo "Population: " . $row['population'] . PHP_EOL;
?>