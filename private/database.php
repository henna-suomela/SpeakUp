<?php

    require_once('db_credentials.php');

    // connect to db with credentials
    function db_connect() {
        $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        confirm_db_connect();
        return $connection;
    }

    // disconnect from database
    function db_disconnect($connection) {
        if(isset($connection)) {
        mysqli_close($connection);
        }
    }

    function db_escape($connection, $string) {
        return mysqli_real_escape_string($connection, $string);
      }

    // confirm there is a connection to db - if not, display error msg
    function confirm_db_connect() {
        if(mysqli_connect_errno()) {
            $msg = "Database connection failed: ";
            $msg .= mysqli_connect_error();
            $msg .= " (" . mysqli_connect_errno() . ")";
            exit($msg);
          }
    }

    // confirm there is results to display from db
    function confirm_result_set($result_set) {
        if (!$result_set) {
            exit("Database query failed.");
        }
    }





?>