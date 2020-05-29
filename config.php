<?php

//Define your host here.
$hostname = "localhost";

//Define your database username here.
$username = "root";

//Define your database password here.
$password = "";

//Define your database name here.
$database = "";

$conn = new mysqli($hostname, $username, $password, $database);

if($conn)
{
   // echo "connected";
}
else
{
      // echo "Not connected";
 
}

?>