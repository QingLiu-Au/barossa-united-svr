<?php
    include 'Config.php';
    $routes = GetRoute($conn);
    header("HTTP/1.1 200 OK");
    echo json_encode($routes);
    mysqli_close($conn);
?>