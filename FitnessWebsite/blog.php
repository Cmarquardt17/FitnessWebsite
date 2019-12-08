<?php
session_start();
require_once 'header.php';

if (!$loggedin)
    die("Log in to view the forums.</div><footer></footer></body></html>");

if (isset($_GET['view'])) 
    $view = sanitizeString($_GET['view']);
else 
    $view = $user;

if (isset($_POST['text'])) {
    $text = sanitizeString($_POST['text']);

    if ($text != "") {
        $pm   = substr(sanitizeString($_POST['pm']),0,1);
        $time = time();
        queryMysql("INSERT INTO messages VALUES(NULL, '$user','$view', '$pm', $time, '$text')");
    }
}
echo <<<_INIT
<!DOCTYPE html>
<html lang="en"
    <head>
        <meta charset='ut-8'>
       
        <link rel='sylesheet' href='css/blog.css'>
        </head>
<!--
        <h1>Discuss</h1>
        <h2>Hello and welcome to the blog section! Here you can feel free to post/comment on different variations of blogs</h2>
        
        <form action="{$_SERVER['PHP_SELF']}" method="post">
        <label for="title">Title:</label>
        <input name="title" id="title" type="text" maxlength="150" />
        <label for="bodytext">Body Text:</label>
        <textarea name="bodytext" id="bodytext"></textarea>
        <input type="submit" value="Create This Entry!" />
      </form>
-->
<form method='post' action='blog.php?view=$view'>
<fieldset data-role="controlgroup" data-type="horizontal">
    <label for="title">Title</label>
    <input name="title" id="title" type="text" maxlength="150"/>
    <legend>Type here to Post.</legend>
    <input type='radio' name='pm' id='public' value='0' checked='checked'>
    <label for="public">Public Post</label>
    <textarea name='text'></textarea><br>
</fieldset>

<input data-transition='slide' type='submit' value='Post Message'>
</form><br>
   
_INIT;

date_default_timezone_set('UTC');

if (isset($_GET['erase'])) {
    $erase = sanitizeString($_GET['erase']);
    queryMysql("DELETE FROM messages WHERE id=$erase AND recip='$user'");
}

$query  = "SELECT * FROM messages WHERE recip='$view' ORDER BY time DESC";
$result = queryMysql($query);
$num    = $result->num_rows;





?>
