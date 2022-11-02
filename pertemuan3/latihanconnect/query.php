<?php

$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
   die("Connection Failed : " . mysqli_connect_error());
}  echo "Connected Successfully to Project 1 <br>"; 
$query_insert = mysql_query($connection, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TTL, NIP, 
JURUSAN) VALUES ('','Annisa Bening Ramadhani', 'surakarta', '2004-10-28', 'K6547898', 'RPL')");
if(!$query_insert) {
   echo ("Error query " . mysqli_error($connection));
} 
mysqli_close($connection);
?>