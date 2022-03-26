<?php
    include 'Config.php';
    $inputJSON = file_get_contents('php://input');
    $arr = json_decode($inputJSON, true); //convert JSON into array
    $isLogin = false;
    $email = '';
    $password = '';

    // Loop through the associative array
    foreach($arr as $key=>$value){
        echo "key => $key, value => $value";
        if ($key == 'isLogin') $isLogin = $value;
        if ($key == 'email') $email = $value;
        if ($key == 'password') $password = $value;
    }

    session_start();
    if ($isLogin) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        echo true;
    }
    else {
        if ($_SESSION['email'] == $email && $_SESSION['password'] == $password) {
            session_unset();
            session_destroy();
            echo true;
        }
        echo false;
    }
    session_write_close();
?>