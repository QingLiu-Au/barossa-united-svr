<?php
    include 'Config.php';
    $inputJSON = file_get_contents('php://input');
    $arr = json_decode($inputJSON, true); //convert JSON into array
    $fileName = "";
    $filePath = "";
    $pageName = "";
    $identifier = "";
    $deleted = false;


    // Loop through the associative array
    foreach($arr as $key=>$value){
        foreach ($value as $k => $v) {
            if ($k == "FileName") $fileName = $v;
            if ($k == "FilePath") $filePath = $v;
            if ($k == "PageName") $pageName = $v;
            if ($k == "Identifier") $identifier = $v;
            if ($k == "Deleted") $deleted = $v;
        }
        $res = UpdateMediaType($conn, $fileName, $filePath, $pageName, $identifier, $deleted);
        // echo $res;
    }

?>