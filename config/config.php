<?php
 

  $host = 'localhost';
  $user = 'root';
  $db = 'web_app';
  $pass = '';
      $connect = mysqli_connect($host, $user, $pass, $db);
         if(!$connect){
             die("Couldnt connect to database");
         }else{
             echo "connected succeful";
         }