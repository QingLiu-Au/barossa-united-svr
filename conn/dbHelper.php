<?php
    include("./models/Route.php");
    include("./models/Content.php");

    function GetRoute() {
        require_once(__DIR__ . '/Conn.php');
        $q = "SELECT * FROM Route";
        $routes = array();
        if ($result = mysqli_query($conn, $q)) {

            while ($obj = mysqli_fetch_object($result)) {

                array_push($routes, 
                new Route($obj->RouteID, $obj->RouteName, $obj->RoutePath, $obj->Public));

            }
            mysqli_free_result($result);
        }

        mysqli_close($conn);
        return $routes;
    }

    function getPageByID($id) { 
        require_once(__DIR__ . '/Conn.php');
        $q = "SELECT * FROM content WHERE fkRouteID = $id";
        $contents = array();
        if ($result = mysqli_query($conn, $q)) {

            while ($obj = mysqli_fetch_object($result)) {

                array_push($contents, 
                new Content($obj->ContentID, $obj->fkRouteID, $obj->Page, $obj->PageIndex, $obj->PageContent));

            }
            mysqli_free_result($result);
        }

        mysqli_close($conn);
        return $contents;
    }

    function insertNewPage($routeID, $page, $pageIndex, $pageContent) {
        require_once(__DIR__ . '/Conn.php');
        $q = "INSERT INTO Content (fkRouteID, Page, PageIndex, PageContent) VALUE ($routeID, '$page', $pageIndex, '$pageContent')";
        return $q;
    }



?>