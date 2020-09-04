<?php

	$db = new SQLite3('./sqlite/data.db');

	if(!$db) {
      echo $db->lastErrorMsg();
   	} 	
?>