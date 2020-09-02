<?php

	$db = "./sqlite/data.db";
	$db = new SQLite3($db);

	if(!$db) {
      echo $db->lastErrorMsg();
   	} 	
?>