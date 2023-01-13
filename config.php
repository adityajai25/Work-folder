<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'infits (2)');
// Try connecting to the Database
$conn = mysqli_connect('localhost', 'root', '', 'infits (2)');
//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}
else{
    echo('Connected to the Database');
}
?>
