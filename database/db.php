<?php
//This file will the main file that connect 
function getdb(){

    $dbconn = pg_connect("host=localhost port=5432 dbname=bookstore user=seriouschicken") or die('connection failed');
}   return $dbconn;
?>