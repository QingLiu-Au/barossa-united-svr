<?php
    include("./models/Route.php");
    include("./models/Content.php");
    include("./models/FileType.php");
    include("./models/User.php");

    // route section
    function GetRoute($conn) {
        $q = "SELECT * FROM Route Where Deleted = 0";
        $routes = array();
        if ($result = mysqli_query($conn, $q)) {

            while ($obj = mysqli_fetch_object($result)) {

                array_push($routes, 
                new Route($obj->RouteID, $obj->RouteName, $obj->RoutePath, $obj->Public));

            }
            mysqli_free_result($result);
        }

        return $routes;
    }

    function GetRouteByID($conn, $routeID) {
        $q = "SELECT * FROM route WHERE RouteID = $routeID AND Deleted = 0";
        $routes = array();
        if ($result = mysqli_query($conn, $q)) {

            while ($obj = mysqli_fetch_object($result)) {

                array_push($routes, 
                new Route($obj->RouteID, $obj->RouteName, $obj->RoutePath, $obj->Public));

            }
            mysqli_free_result($result);
        }

        return $routes;
    }

    function InsertRoute($conn, $routeName, $routePath, $public) {
        $q = "INSERT INTO route (RouteName, RoutePath, Public) VALUES ($routeName, $routePath, $public)";
        if (mysqli_query($conn, $q)) { 
            echo "record inserted";
            return true; 
        }
        
        return false;
    }

    function UpdateRoute($conn, $routeID, $routeName, $routePath, $public) {
        $q = "UPDATE route SET RouteName = '$routeName', RoutePath = '$routePath', Public = $public WHERE RouteID = $routeID";
        if (mysqli_query($conn, $q)) {
            return true;
        }
        return false;
    }

    function DeleteRoute($conn, $routeID) {
        $q = "UPDATE route SET Deleted = 1 WHERE RouteID = $routeID";
        if (mysqli_query($conn, $q)) {
            return true;
        }
        return false;
    }

    // page section
    function GetPageByRoutePath($conn, $path) { 

        $q = "SELECT * FROM content WHERE fkRouteID = (SELECT RouteID FROM route WHERE RoutePath = '$path') AND Deleted = 0";
        $contents = array();
        if ($result = mysqli_query($conn, $q)) {

            while ($obj = mysqli_fetch_object($result)) {

                array_push($contents, 
                new Content($obj->ContentID, $obj->fkRouteID, $obj->Page, $obj->PageIndex, $obj->PageContent));

            }
            mysqli_free_result($result);
        }
        return $contents;
    }
    function getPageByID($conn, $id) { 
        $q = "SELECT * FROM content WHERE fkRouteID = $id AND Deleted = 0";
        $contents = array();
        if ($result = mysqli_query($conn, $q)) {

            while ($obj = mysqli_fetch_object($result)) {

                array_push($contents, 
                new Content($obj->ContentID, $obj->fkRouteID, $obj->Page, $obj->PageIndex, $obj->PageContent));

            }
            mysqli_free_result($result);
        }
        return $contents;
    }

    function insertNewPage($conn, $routeID, $page, $pageIndex, $pageContent) {
        $q = "INSERT INTO Content (fkRouteID, Page, PageIndex, PageContent) VALUE ($routeID, '$page', $pageIndex, '$pageContent')";
        if (mysqli_query($conn, $q)) { 
            return true; 
        }
        return false;
    }

    function updatePage($conn, $contentID, $routeID, $page, $pageIndex, $pageContent) { 
        $q = "UPDATE Content SET fkRouteID = $routeID, Page = '$page', PageIndex = $pageIndex, PageContent = '$pageContent' WHERE ContentID = $contentID";
        if (mysqli_query($conn, $q)) {
            return true;
        }
        return false;
    }

    function DeleteContent($conn, $contentID) {
        $q = "UPDATE content SET Deleted = 1 WHERE ContentID = $contentID";
        if (mysqli_query($conn, $q)) {
            return true;
        }
        return false;
    }

    // File type 
    function InsertFileType($conn, $fileName, $filePath, $pageName, $identifier) { 
        $q = "INSERT INTO fileType (FileName, FilePath, PageName, Identifier, Deleted) VALUES ('$fileName', '$filePath', '$pageName', '$identifier', 0)";
        if (mysqli_query($conn, $q)) { 
            return true; 
        }
        return false;
    }

    function GetPageMediaFilesByPage($conn, $pageName) { 
        $q = "SELECT * FROM fileType WHERE PageName = '$pageName'";
        $mediaFiles = array();
        if ($result = mysqli_query($conn, $q)) {

            while ($obj = mysqli_fetch_object($result)) {

                array_push($mediaFiles, 
                new FileType($obj->FileID, $obj->FileName, $obj->FilePath, $obj->PageName, $obj->Identifier));

            }
            mysqli_free_result($result);
        }
        return $mediaFiles;
    }

    function GetPageMediaFiles($conn) { 
        $q = "SELECT * FROM fileType";
        $mediaFiles = array();
        if ($result = mysqli_query($conn, $q)) {

            while ($obj = mysqli_fetch_object($result)) {

                array_push($mediaFiles, 
                new FileType($obj->FileTypeID, $obj->FileName, $obj->FilePath, $obj->PageName, $obj->Identifier));

            }
            mysqli_free_result($result);
        }
        return $mediaFiles;
    }

    // admin login section
    function AdminLogin($conn, $email, $password) {
        $q = "SELECT * FROM user WHERE Email = '$email' AND Password = '$password'";
        $users = array();
        if ($result = mysqli_query($conn, $q)) {

            while ($obj = mysqli_fetch_object($result)) {
                array_push($users, 
                new User($obj->UserID, $obj->FirstName, $obj->LastName, $obj->Password, $obj->Email));

            }
            mysqli_free_result($result);
        }
        return $users;
    }

?>