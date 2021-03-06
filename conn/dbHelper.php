<?php
    include("./models/Route.php");
    include("./models/Content.php");
    include("./models/FileType.php");
    include("./models/User.php");

    // route section
    function GetRoute($conn) {
        $q = "SELECT * FROM route Where Deleted = 0";
        $routes = array();
        if ($result = mysqli_query($conn, $q)) {

            while ($obj = mysqli_fetch_object($result)) {

                array_push($routes, 
                new Route($obj->RouteID, $obj->RouteName, $obj->RoutePath, $obj->Public, $obj->Hidden));

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
                new Route($obj->RouteID, $obj->RouteName, $obj->RoutePath, $obj->Public, $obj->Hidden));

            }
            mysqli_free_result($result);
        }

        return $routes;
    }

    function InsertRoute($conn, $routeName, $routePath, $public, $hidden) {
        $q = "INSERT INTO route (RouteName, RoutePath, Public, Hidden, Deleted) VALUES ($routeName, $routePath, $public, $hidden, 0)";
        if (mysqli_query($conn, $q)) { 
            return true; 
        }
        
        return false;
    }

    function UpdateRoute($conn, $routeID, $routeName, $routePath, $public, $hidden) {
        $q = "UPDATE route SET RouteName = '$routeName', RoutePath = '$routePath', Public = $public, Hidden = $hidden WHERE RouteID = $routeID";
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
        $q = "INSERT INTO content (fkRouteID, Page, PageIndex, PageContent) VALUE ($routeID, '$page', $pageIndex, '$pageContent')";
        if (mysqli_query($conn, $q)) { 
            return true; 
        }
        return false;
    }

    function updatePage($conn, $contentID, $routeID, $page, $pageIndex, $pageContent) { 
        $q = "UPDATE content SET fkRouteID = $routeID, Page = '$page', PageIndex = $pageIndex, PageContent = '$pageContent' WHERE ContentID = $contentID";
        echo $q;
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
    function UpdateMediaType($conn, $fileName, $filePath, $pageName, $identifier, $deleted) {
        $q = "UPDATE filetype SET FileName = '$fileName', FilePath = '$filePath', PageName = '$pageName', Identifier = '$identifier', Deleted = $deleted WHERE FilePath = '$filePath'";
        if (mysqli_query($conn, $q)) {
            return true;
        }
        return false;
    }
    function InsertFileType($conn, $fileName, $filePath, $pageName, $identifier) { 
        $q = "INSERT INTO filetype (FileName, FilePath, PageName, Identifier, Deleted) VALUES ('$fileName', '$filePath', '$pageName', '$identifier', 0)";
        if (mysqli_query($conn, $q)) { 
            return true; 
        }
        return false;
    }

    function GetPageMediaFilesByPage($conn, $pageName) { 
        $q = "SELECT * FROM filetype WHERE PageName = '$pageName'";
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

    function GetPageMediaFiles($conn) { 
        $q = "SELECT * FROM filetype";
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

    function GetAllUsers($conn) {
        $q = "SELECT * FROM user";
        $users = array();
        if ($result = mysqli_query($conn, $q)) {

            while ($obj = mysqli_fetch_object($result)) {
                array_push($users, 
                new User($obj->UserID, $obj->FirstName, $obj->LastName, "", $obj->Email));

            }
            mysqli_free_result($result);
        }
        return $users;
    }

    function UpdateUser($conn, $userID, $firstName, $lastName, $email, $password) { 
        $q = "UPDATE user SET FirstName = '$firstName', LastName = '$lastName', Email = '$email', Password = '$password' WHERE UserID = $userID";
        if (mysqli_query($conn, $q)) {
            return true;
        }
        return false;
    }

?>