<?php
    include 'Config.php';
    $routes = GetRoute($conn);
    echo json_encode($routes);
    mysqli_close($conn);
?>