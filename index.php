<?php
include ('models/post.php');
  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  }
  else if (isset($_GET['username'])){
	 $controller = 'pages';
    $action     = 'results'; 
	  
  }

  else {
    $controller = 'pages';
    $action     = 'home';
  }

  require_once('views/layout.php');
?>