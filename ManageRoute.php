<?php
    include 'Config.php';
    $inputJSON = file_get_contents('php://input');
    $arr = json_decode($inputJSON, true); //convert JSON into array
    $RouteID = "";
    $RouteName = "";
    $RoutePath = "";
    $Public = "";
    $Hidden = "";
    $Deleted = false;

    // Loop through the associative array
    foreach($arr as $key=>$value){
        foreach ($value as $k => $v) {
            if ($k == "RouteID") $RouteID = $v;
            if ($k == "RouteName") $RouteName = $v;
            if ($k == "RoutePath") $RoutePath = $v;
            if ($k == "Public") $Public = $v;
            if ($k == "Hidden") $Hidden = $v;
            if ($k == "Deleted") $Deleted = $v;
        }
        $res = UpdateRoute($conn, $RouteID, $RouteName, $RoutePath, $Public, $Hidden);
        echo $res;
    }

?>