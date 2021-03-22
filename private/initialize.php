<?php
//output buffering turned on
ob_start(); 
// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');
// Assign the root URL to a PHP constant
// Do not need to include the domain
// Use the same document root as webserver
// Can set a hardcoded value:
// define("WWW_ROOT", 'kokeiluprojekti');
// define (WWW_ROOT, '');
// Can dynamically find everything in URL up to "/public)"
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);
//this file loads up functions-file and other code as well
    require_once('functions.php');
    require_once('database.php');
    require_once('query_functions.php');
    require_once('validation_functions.php');

    //whenever php file requires initialize.php, 
    //db-command below can be used to connect to the database
    $db = db_connect();
// this means there's always errors-variable in place:
    $errors = [];
//login functions
?>
