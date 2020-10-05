<?php
	function pdo_connect_mysql() {
		$database_host = 'localhost';
		$database_user = 'root';
		$database_pass = '';
		$database_name = 'masjid';

		try {
			return new PDO('mysql:host=' . $database_host . ';dbname=' . $database_name . ';charset=utf8', $database_user, $database_pass);
		} catch (PDOException $exception) {
			exit('Failed to connect to database!');
		}
	}
?>