<?php 
 
// $koneksi = mysqli_connect("localhost","root","","spp");
 
// // Check connection
// if (mysqli_connect_errno()){
// 	echo "Koneksi database gagal : " . mysqli_connect_error();
// }

try {
	$host = 'localhost';
	$dbname = 'spp';
	$user = 'root';
	$pass = '';
	# MySQL with PDO_MYSQL
	$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  }
  catch(PDOException $e) {
	  echo $e->getMessage();
  }
 
?>