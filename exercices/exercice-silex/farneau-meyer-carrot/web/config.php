<?php


// Display errors
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Define DB constants
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','exercice-silex-farneau-meyer-carrot');

try
{
    $pdo = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST,DB_USER,DB_PASS);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_NAMED);

}
catch (PDOException $e)
{
    die('DB error');
}

?>
