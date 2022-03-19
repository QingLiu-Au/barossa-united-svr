<?php
    include 'Config.php';
    $param = $_GET['PathName'];
    if ($param == "allpages") {
        $files = GetPageMediaFiles($conn);
        echo json_encode($files);
    }
    else { 
        $files = GetPageMediaFilesByPage($conn, $param);
        echo json_encode($files);
    }
    mysqli_close($conn);
?>