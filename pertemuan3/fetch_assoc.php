<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if (!$connection) {
    die ("Connection Failed : " . mysqli_connect_error());
}  echo "Connected Successfully to Project 1 <br>";

$query = mysqli_query($connection, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");

if (!$query) {
    echo ("Error query " . mysqli_error($connection));
} 
$data = mysqli_fetch_assoc($query);
print_r($data);

while($row = mysqli_fetch_array($query, MYSQL_ASSOC)) {
    print "ID : " . $row["ID"] . "<br>";
    print "NAMA_LENGKAP : " . $row["NAMA_LENGKAP"] . "<br>";
    print "JURUSAN : " . $row["JURUSAN"] . "<br>";
}
mysqli_close($connection);
?> 