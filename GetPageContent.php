<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    
    include $_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['PHP_SELF']).'/conn/Conn.php';
    include $_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['PHP_SELF']).'/conn/dbHelper.php';
    $param = $_GET['PathName'];
    $content = GetPageByRoutePath($conn, $param);
    echo json_encode($content);
    mysqli_close($conn);
?>