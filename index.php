<?php
echo 'Docker Project';
$host = 'db'; //service name form docker-compose.yml
$user = 'nilesh';
$password = 'sqlpass';
$db = 'my db';


$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error)
{
	echo 'connection failed' .$conn->connect_error;
}
echo 'successfull connected to MYSQL'
?>
