<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Title</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    nav {
      background-color: #4E6E81;
      color: white ;
      padding: 10px 0;
    }

    .nav {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    .nav li {
      float: left;
    }

    .nav li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .nav li a:hover {
      background-color: #111;
    }

    .nav .dropdown {
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
    </style>
</head>
<body>
<nav>
  <ul class="nav navbar-nav">
    <li class="dropdown">
      <a href=""><i class="fas fa-home"></i> Admin Page</a>
      <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
  </ul>
</nav>
</body>
</html>
