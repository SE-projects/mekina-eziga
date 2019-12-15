<?php

$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="loginsystem";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!$conn){
	echo "fuuuuuuck";
	die("Connection failed:".mysqli_connect_error());
}