<?php
/* Database credentials */
define('DB_SERVER', '10.201.68.199');
define('DB_USERNAME', 'phpcrud');
define('DB_PASSWORD', '123');
define('DB_NAME', 'hortmanns_db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL
)";

mysqli_query($link, $sql);
?>