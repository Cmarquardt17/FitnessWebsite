<?php
session_start();
require_once 'header.php';

//if (!$loggedin)
 //   die("Log in to view the forums.</div><footer></footer></body></html>");

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
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInRight">
        
                    <div class="ibox-content m-b-sm border-bottom">
                        <div class="p-xs">
                            <div class="pull-left m-r-md">
                                <i class="fa fa-globe text-navy mid-icon"></i>
                            </div>
                            <h2>Welcome to our forum</h2>
                            <span>Feel free to choose topic you're interested in.</span>
                        </div>
                    </div>
        
                    <div class="ibox-content forum-container">
        
                        <div class="forum-title">
                            <div class="pull-right forum-desc">
                                <samll>Total posts: 320,800</samll>
                            </div>
                            <h3>General subjects</h3>
                        </div>
        
                        <div class="forum-item active">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-shield"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">General Discussion</a>
                                    <div class="forum-sub-title">Talk about sports, entertainment, music, movies, your favorite color, talk about enything.</div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        1216
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        368
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        140
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-bolt"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">Introductions</a>
                                    <div class="forum-sub-title">New to the community? Please stop by, say hi and tell us a bit about yourself. </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        890
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        120
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        154
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="forum-item active">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">Announcements</a>
                                    <div class="forum-sub-title">This forum features announcements from the community staff. If there is a new post in this forum, please check it out. </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        680
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        124
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        61
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">Staff Discussion</a>
                                    <div class="forum-sub-title">This forum is for private, staff member only discussions, usually pertaining to the community itself. </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        1450
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        652
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        572
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="forum-title">
                            <div class="pull-right forum-desc">
                                <samll>Total posts: 17,800,600</samll>
                            </div>
                            <h3>Other subjects</h3>
                        </div>
        
                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">Questions </a>
                                    <div class="forum-sub-title">If you have any questions for our staff feel free to stop by in this Forum and ask. We will get back to you in no time!</div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        1516
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        238
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        180
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-bomb"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">Workout Discussion</a>
                                    <div class="forum-sub-title"> Come into this forum to discuss different workout teqniques, there as always new workouts that can benefit your fellow lifters! </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        1766
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        321
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        42
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-bookmark"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">Supplement Discussion</a>
                                    <div class="forum-sub-title">Feel free to discuss your favorite supplement brands whether it be pre-workout, post-workout, vitamins, protien, etc in this forum.</div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        765
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        90
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        11
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-ambulance"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">Videos</a>
                                    <div class="forum-sub-title">Dont know how to do a certain exercise properly? If you ask in this forum our people will get back to you with hands on video production describing how to execute what you want corretly and safely.</div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        2550
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        122
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        92
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
        </div>
   
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
