<?php

   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('./sqlite/data.db');
      }
   }
   
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } 

?>