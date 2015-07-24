<?php
	// Config your mysql database settings here.

	error_reporting(1);
	// Default database connection settings.
	DEFINE('DB_HOSTNAME','localhost');
	DEFINE('DB_USERNAME','root');
	DEFINE('DB_PASSWORD','');
	DEFINE('DB_NAME','plugin_db');


	$conn = new MySQLi(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);

	if($conn->connect_error) {

		echo "Ooops, something went wrong.";
	} 

