<?php
    include 'Config.php';
    $param = $_GET['PathName'];
    $content = GetPageByRoutePath($conn, $param);
    echo json_encode($content);
    mysqli_close($conn);
?>