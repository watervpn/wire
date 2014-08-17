<?php
session_start();

if (isset($_SESSION['user_role'])) {
  $role = $_SESSION['user_role'];
  $is_logged_in = TRUE;
} else {
  $is_logged_in = FALSE;
}

$uri = $_SERVER['REQUEST_URI'];

//get the file name without .php
$uri = get_last_URI($uri);

$preview_uri = (isset($_SESSION['origin_uri'])) ? $_SESSION['origin_uri'] : '';


//protect profile
if($uri == 'user') {

  //only allow defined role to access profile page
  if (($role == 'loggin_user' || $role == 'admin') && $uri == $preview_uri) {

  }else{
    //redirect only previews uri is not the same as the current one
    $_SESSION['origin_uri'] = $uri;
    header("Location: login.php");
  }
}


function get_last_URI($uri) {
  //get request url and explode it to pieces
  $arr = explode('/', $uri);

  //get the last element from array
  $last_part = end($arr);

  //remove .php from string
  $current_page_name = preg_replace('/\.php/', '', $last_part);

  return $current_page_name;
}

?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Water VPN</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="webicons/webicons.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/local.css" />
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/custom.js"></script>
  </head>
  <body>

  <?php include("inc/nav.inc"); ?>