<?php
    include "Config.php";
    $arr = json_decode(file_get_contents("php://input"), true);
    $isLogin = false;
    $email = "";
    $password = "";

    // Loop through the associative array
    foreach($arr as $key=>$value){
        // echo "key => $key, value => $value";
        if ($key == "isLogin") $isLogin = $value;
        if ($key == "email") $email = $value;
        if ($key == "password") $password = $value;
    }

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
        if ($_SESSION["email"] = $email && $_SESSION["password"] = $password) {
            $users = GetAllUsers($conn);
            echo json_encode($users);
        } else {
            echo "[]";
        }
    } else {
        echo "[]";
    }
    
    

?>