<?php 

$servername='localhost';
$username='root';
$password='';
$dbname='dictionary';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {

	die('Database not connected');

}



?>