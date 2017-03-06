<?php
 $base = mysql_connect('localhost','root', '');
mysql_select_db ('sev',$base) ;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdchu";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; 
?>