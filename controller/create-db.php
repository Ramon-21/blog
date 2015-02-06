<?php
   require_once(__DIR__ . "/../model/database.php");
   
   $connection = new mysqli($host, $usename, $password );
   
   if($connection->connect_error) {
       die("error: " . $connection->connect_error);
   }
   
   $exists  =  $connection->select_db($database);
   
   if(!$exists) {
     $query = $connection->("CREATE DATABASE $database");       
   }
       
   $connection->close();
