<?php
    class FileType {
        var $FileID;
        var $FileName;
        var $FilePath;
        var $PageName;
        var $Identifier;
        var $Deleted;

        function __construct($fileID, $fileName, $filePath, $pageName, $identifier) {
            $this->FileID = $fileID;
            $this->FileName = $fileName;
            $this->FilePath = $filePath;
            $this->PageName = $pageName;
            $this->Identifier = $identifier;
            $this->Deleted = 0;
        }

        // getters
        function getFileID() {
            return $this->FileID;
        }
        function getFileName() {
            return $this->FileName;
        }
        function getFilePath(){
            return $this->FilePath;
        }
        function getPageName() {
            return $this->PageName;
        }
        function getIdentifier() {
            return $this->Identifier;
        }
        function getDeleted() {
            return $this->Deleted;
        }
    }

?>