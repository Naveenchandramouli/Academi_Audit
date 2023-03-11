<?php

$servername="localhost";
$username="root";
$password="";
$dbname="obs";
$conn=mysqli_connect($servername,$username,$password,$dbname);

// Serialize the Array
$names_str = serialize($_POST['mark']);
$users_str = serialize($_POST['total']);
$users = serialize($_POST['bt']);

// Insert record
$sql = "INSERT INTO parta VALUES('".$names_str."','".$users_str."','".$users."')";
mysqli_query($con,$sql); 
echo "<script> alert('Inserted'); </script>"
?>