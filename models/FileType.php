<?php
    class FileType {
        var $FileID;
        var $FileName;
        var $FilePath;
        var $Type;
        var $Deleted;

        function __construct($fileID, $fileName, $filePath, $type) {
            $this->FileID = $fileID;
            $this->FileName = $fileName;
            $this->FilePath = $filePath;
            $this->Type = $type;
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
        function getType() {
            return $this->Type;
        }
        function getDeleted() {
            return $this->Deleted;
        }
    }

?>