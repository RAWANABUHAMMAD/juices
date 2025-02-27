<?php
$host="localhost";
$username="root";
$password="";
$databasename="juicecorner";

try{
    $conn=new PDO("mysql:host=$host;dbname=$databasename",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die("Connection failed: ".$e->getMessage());
}
?>