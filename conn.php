<?php
//Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$db="bookshare";
//Check Connection
$conn = new mysqli($servername, $username, $password, $db);
if(!$conn){
 die ("Error on the Connection" . $conn->connect_error);
}
else {
  echo "";
}
?>
