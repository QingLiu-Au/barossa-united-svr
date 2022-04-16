<?php
    include "Config.php";

    $users = GetAllUsers($conn);
    echo json_encode($users);
?>