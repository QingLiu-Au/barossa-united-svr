<?php
    // $server="localhost";
    // $user="root";
    // $pass="";
    // $database="borassaunited";
    
    // $conn=@mysqli_connect($server, $user, $pass,$database)
    // or die("Unable to connect to the database");
    
    $username = "buadminac"; 
    $password = "borassaunitedassessment"; 
    $host = "db4free.net:3306"; 
    $dbname = "borassaunited"; 
    try 
    { 
        $conn = @mysqli_connect($host, $username, $password,$dbname); 
    } 
    catch(PDOException $ex) 
    { 
        die("Failed to connect to the database: " . $ex->getMessage()); 
    } 


?>