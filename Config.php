<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include $_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['PHP_SELF']).'/conn/Conn.php';
include $_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['PHP_SELF']).'/conn/dbHelper.php';

?>