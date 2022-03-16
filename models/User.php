<?php
    class User {
        var $UserID;
        var $FirstName;
        var $LastName;
        var $Password;
        var $Email;
        var $Deleted;

        function __construct($userID, $FirstName, $LastName, $password, $email) {
            $this->UserID = $userID;
            $this->FirstName = $firstName;
            $this->LastName = $lastName;
            $this->Password = $password;
            $this->Email = $email;
            $this->Deleted = 0;
        }

        // getters
        function getUserID() {
            return $this->UserID;
        }
        function getFirstName(){
            return $this->FirstName;
        }
        function getLastName(){
            return $this->LastName;
        }
        function getEmail(){
            return $this->Email;
        }
        function getPassword(){
            return $this->Password;
        }
        function getDeleted(){
            return $this->Deleted;
        }
    }

?>