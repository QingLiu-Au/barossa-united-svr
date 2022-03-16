<?php
    class Route {
        var $RouteID;
        var $RouteName;
        var $RoutePath;
        var $Public;
        var $Deleted;

        function __construct($routeID, $routeName, $routePath, $public) {
            $this->RouteID = $routeID;
            $this->RouteName = $routeName;
            $this->RoutePath = $routePath;
            $this->Public = $public;
            $this->Deleted = false;
        }

        // getters
        function getRouteName() { 
            return $this->RouteName;
        }
        function getRoutePath() {
            return $this->RoutePath;
        }
        function getPublic() {
            return $this->Public;
        }
        function getDeleted() {
            return $this->Deleted;
        }
    }

?>