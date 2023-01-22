<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "user_db";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}

$con = mysqli_connect("localhost","root","","user_db");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>
