<?php
session_start();

$clubstr = 'Fitness Bros';
$sloganSTR ='Strive to Succeed';
$sloganSTR2 = 'Welcome to the Pack!';
$userstr = 'Welcome fellow lifter';

echo <<<_INIT
<!DOCTYPE html> 
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'> 
        <script src='javascript.js'></script>
        <link href="https://fonts.googleapis.com/css?family=Arsenal|Lora|Muli|Source+Sans+Pro|Playfair+Display&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='css/styles.css'>
        <link rel='stylesheet' href='css/signupstyles.css'>
        <link rel='stylesheet' href='css/headerstyle.css'>
        <title>$clubstr: $userstr</title>
        </head>
_INIT;

require_once 'functions.php';

if (isset($_SESSION['user'])) {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Logged in as: $user";
}
else $loggedin = FALSE;

echo <<<_HEADER_OPEN
    
    <body>
        <div id="wrapper">
        <header>
            <img id = 'logoPic' src='img/wolf.png' alt='wolf' height='80' weight='30'>
            <div id='logo'>$clubstr<div id='slogan'>$sloganSTR</div></div>
            <div>
_HEADER_OPEN;

if ($loggedin) {
echo <<<_LOGGEDIN

            <nav><ul>
                <li><a href='members.php?view=$user' onclick = "currentSlide(1)">Home</a></li>
                <li><a href='members.php'>Members</a></li>
                <li><a href='friends.php'>Friends</a></li>
                <li><a href='messages.php'>Messages</a></li>
                <li><a href='profile.php'>Edit Profile</a></li>
                <li><a href='logout.php'>Log out</a></li>
                <li><a href='about.php'>About</a></li>
            </ul></nav>
_LOGGEDIN;
} else {
echo <<<_GUEST

            <nav><ul>
                <li><a href='index.php'onclick = "currentSlide(1)">Home</a></li>
                <li><a href='signup.php'>Sign Up</a></li>
                <li><a href='login.php'>Log In</a></li>
                <li><a href='about.php'>About</a></li>
            </ul></nav>
_GUEST;
 }

echo <<<_HEADER_CLOSE

        </header>
        <div class='username'>$userstr</div>
        <div id="content">
_HEADER_CLOSE;

?>
