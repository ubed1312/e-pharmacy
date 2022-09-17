<?php
$servername="localhost";
$username="root";
$password="";
$dbname="e-pharmacy";



//connexion au serveur
$con=mysqli_connect($servername,$username,$password,$dbname);

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname="e-pharmacy";
try {
  $pdo = new PDO("mysql:host=$servername;dbname=e-pharmacy", $username, $password);
} catch (Exception $e) {
  die('Erreur' . $e->getMessage());
} ?>
<!-- ?> -->