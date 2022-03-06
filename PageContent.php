<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    include $_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['PHP_SELF']).'/conn/Conn.php';
    include $_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['PHP_SELF']).'/conn/dbHelper.php';
    $inputJSON = file_get_contents('php://input');
    $arr = json_decode($inputJSON, true); //convert JSON into array
    $routeID = 0;
    $page = '';
    $pageIndex = 0;
    $pageContent = '';

    // Loop through the associative array
    foreach($arr as $key=>$value){
        if ($key == 'routeID') $routeID = $value;
        if ($key == 'page') $page = $value;
        if ($key == 'pageContent') $pageContent = $value;
    }

    $contents = GetPageByID($conn, $routeID);

    if (count($contents) == 0) {
        echo "insert record";
        $result = insertNewPage($conn, $routeID, $page, $pageIndex, $pageContent);
        echo $result;
    } 
    else { 
        echo "update record";
    }
    echo json_encode($contents);
    mysqli_close($conn);
?>