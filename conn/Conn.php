<?php
// function Conn() {
    $server="localhost";
    $user="root";
    $pass="";
    $database="borassaunited";
    
    $conn=@mysqli_connect($server, $user, $pass,$database)
    or die("Unable to connect to the database");
    
//     echo"Connected to $database";

//     return $conn;
// }

?>