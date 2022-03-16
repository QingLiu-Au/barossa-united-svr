<?php
    class Content {
        var $ContentID;
        var $RouteID;
        var $Page;
        var $PageIndex;
        var $PageContent;
        var $Deleted;

        function __construct($contentID, $routeID, $page, $pageIndex, $pageContent) { 
            $this->ContentID = $contentID;
            $this->RouteID = $routeID;
            $this->Page = $page;
            $this->PageIndex = $pageIndex;
            $this->PageContent = $pageContent;
            $this->Deleted = false;
        }

        // getters
        function getContentID() {
            return $this->ContentID;
        }
        function getRouteID() {
            return $this->RouteID;
        }
        function getPage() {
            return $this->Page;
        }
        function getPageContent() {
            return $this->PageContent;
        }
        function getPageIndex() {
            return $this->PageIndex;
        }
        function getDeleted() {
            return $this->Deleted;
        }
    }

?>