<?php
$servername = "localhost:3307";
$database = "instareport";
$username = "root";
$password = "123456";
// Create connection
$baglanti = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$baglanti) {
    die("Connection failed: ".mysqli_connect_error());
}

else{
//    echo "bağlantı basarili"
}

?>