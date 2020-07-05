<?php
require "config.php";

// // DB credentials.
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','carrentalone');

try {

    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$sth = $db->query("SELECT * FROM notifications");
$locations = $sth->fetchAll();

echo json_encode( $locations );

} catch (Exception $e) {
echo $e->getMessage();
}

?>