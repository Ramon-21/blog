<?php
   require_once(__DIR__ . "../model/database.php");
   
   $connection = new myslqi($host, $usename, $password );
   
   if($connection->connect_error) {
       die("error: " . $connection->connect_error);
   }
   else {
       echo "success" . $connection->host_info;
   }
   
   $connection->close();
