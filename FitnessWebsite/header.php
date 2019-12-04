<?php
session_start();

$clubstr = 'Fitness Bros';
$sloganSTR ='Strive to Succeed';
$userstr = 'Welcome';

echo <<<_INIT
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='css/styles.css'>
        <link rel='stylesheet' href='css/signup.css'>
        <link rel='stylesheet' href='css/profileLayout.css'>
        <title>$clubstr: $userstr</title>
        </head>
_INIT;

require_once 'functions.php';

if (isset($_SESSION['user'])) {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Logged in as: $user";
}
else {
  $loggedin = FALSE;
  $userstr = '';
}
echo <<<_HEADER_OPEN
        <body>
_HEADER_OPEN;

if ($loggedin) {
echo <<<_LOGGEDIN
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #61b9fa;">
  <a class="navbar-brand" href="#">
  <img class='logo' src="img/ArtikunoLogo.png" alt="logo" width="100" class="d-inline-block align-middle mr-2">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="members.php?view=$user">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="messages.php">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="messages.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="messages.php">Workout Builder</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile Edit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    <span class="navbar-text">
    </span>
  </div>
</nav>
_LOGGEDIN;
} else {
echo <<<_GUEST
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #61b9fa;">
  <a class="navbar-brand" href="#">
  <img class='logo' src="img/ArtikunoLogo.png" alt="logo" width="100" class="d-inline-block align-middle mr-2">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
    <span class="navbar-text">
    </span>
  </div>
</nav>
_GUEST;
 }

echo <<<_HEADER_CLOSE
        <div class='username'>$userstr</div>
_HEADER_CLOSE;

?>
