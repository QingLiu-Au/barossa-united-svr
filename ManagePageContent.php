<?php
    include 'Config.php';
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
        $result = insertNewPage($conn, $routeID, $page, $pageIndex, str_replace("'", "\'", $pageContent));
    } 
    else { 
        $result = updatePage($conn, $contents[0]->getContentID(), $routeID, $page, $contents[0]->getPageIndex(), str_replace("'", "\'", $pageContent));
    }
    echo json_encode($result);
    mysqli_close($conn);
?>