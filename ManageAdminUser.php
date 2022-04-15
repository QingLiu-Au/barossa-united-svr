<?php
    include "Config.php";
    $arr = json_decode(file_get_contents("php://input"), true);
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $userID = -1;
    $firstName = "";
    $lastName = "";
    $email = "";
    $password = "";
    
    // Loop through the associative array
    foreach($arr as $key=>$value){
        // echo "key => $key, value => $value";
        if ($key == "UserID") $userID = $value;
        if ($key == "FirstName") $firstName = $value;
        if ($key == "LastName") $lastName = $value;
        if ($key == "Email") $email = $value;
        if ($key == "Password") $password = $value;
    }
    
    if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
        if ($_SESSION["email"] = $email && $_SESSION["password"] = $password) {
            $res = UpdateUser($conn, $userID, $firstName, $lastName, $email, $password);
            echo json_encode($res);
        } else {
            echo json_encode(false);
        }
    } 

?>