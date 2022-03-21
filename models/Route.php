<?php
    class Route {
        var $RouteID;
        var $RouteName;
        var $RoutePath;
        var $Public;
        var $Hidden;
        var $Deleted;

        function __construct($routeID, $routeName, $routePath, $public, $hidden) {
            $this->RouteID = $routeID;
            $this->RouteName = $routeName;
            $this->RoutePath = $routePath;
            $this->Public = $public;
            $this->Hidden = $hidden;
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
        function getHidden() {
            return $this->Hidden;
        }
        function getDeleted() {
            return $this->Deleted;
        }
    }

?>