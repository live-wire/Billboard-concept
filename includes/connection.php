<?php
require("constants.php");

// 1. Create a database connection
$connect= mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$connect) {
	die("Database connection failed: " . mysql_error());
}

// 2. Select a database to use 
$db = mysql_select_db(DB_NAME,$connect);
if (!$db) {
	die("Database selection failed: " . mysql_error());
}
?>
