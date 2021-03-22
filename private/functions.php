<?php

function url_for($script_path) {
    // following code will add the leading '/' if not present
    if($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

// with special characters, use urlencode and rawurlencode with following command

function u($string="") {
    return urlencode($string);
}

function raw_u($string="") {
    return rawurlencode($string);
}

// exclude html special characters and prevent harmful js from running:

function h($string="") {
    return htmlspecialchars($string);
}

function error_404() {
    header($_SERVER["SERVER_PROTOCOL"] . "404 Not Found");
    // here you could also render a php-page saying "not found"
    exit();
}

function error_500() {
    header($_SERVER["SERVER_PROTOCOL"] . "500 Internal Server Error");
    // here you could also render a php-page saying "not found"
    exit();
}

function redirect_to($location) {
header("Location: " . $location);
exit;
}

function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function display_errors($errors=array()) {
    $output = '';
    if(!empty($errors)) {
      $output .= "<div class=\"errors\">";
      $output .= "Korjaa seuraavat kentät:";
      $output .= "<ul>";
      foreach($errors as $error) {
        $output .= "<li>" . h($error) . "</li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }
    return $output;
  }
?>
