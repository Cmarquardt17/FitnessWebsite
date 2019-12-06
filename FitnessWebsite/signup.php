<?php
require_once 'header.php';

echo <<<_END
<script>
    function checkUser(user) {
        if (user.value == '') {
            $('#used').html('&nbsp;');
            return;
        }

        $.post('checkuser.php', { user : user.value }, function(data) {
            $('#used').html(data)
        });
    }
</script>  
_END;

$error = $user = $pass = "";
if (isset($_SESSION['user'])) 
    destroySession();

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    $firstName = sanitizeString($_POST['first']);
    $mIn = sanitizeString($_POST['mIn']);
    $lastName = sanitizeString($_POST['last']);
    $type = sanitizeString($_POST['type']);
    if ($user == "" || $pass == "")
        $error = 'Not all fields were entered<br><br>';
    else {
        $result = queryMysql("SELECT * FROM members WHERE user='$user'");

        if ($result->num_rows)
            $error = 'That username already exists<br><br>';
        else {
            queryMysql("INSERT INTO members VALUES('$user', '$pass','$firstName','$mIn','$lastName', '$type')");
            die('<h4>Account created</h4>Please Log in.</div></body></html>');
        }
    }
}

echo <<<_END
<div class="container">
    <form method='post' action='signup.php'>$error
        <div data-role='fieldcontain'>
            <label></label>
            <h3>Please fill in the necessary information to get started!</h3>
        </div>
        <div data-role='fieldcontain'>
            <label>Username</label>
            <input type='text' maxlength='16' name='user' value='$user' onBlur='checkUser(this)'>
            <label></label>
            <!-- <div id='used'>&nbsp;</div> -->
        </div>
        <div data-role='fieldcontain'>
            <label>Password</label>
            <input type='text' maxlength='16' name='pass' value='$pass'>
        </div>
        <div data-role='fieldcontain'>
            <label>First Name</label>
            <input type='text' maxlength='16' name='first' value='$firstName'>
        </div>
        <div data-role='fieldcontain'>
            <label>Middle Inital</label>
            <input type='text' maxlength='16' name='mIn' value='$mIn'>
        </div>
        <div data-role='fieldcontain'>
            <label>Last Name</label>
            <input type='text' maxlength='16' name='last' value='$lastName'>
        </div>
        
        <div data-role='fieldcontain'>
            <label>What type of Lifter are you? (Crossfit, Body Builder, Newbie, or Runner?)<br></label>
            <input type='text' maxlength='16' name='type' value='$type'>
        </div>
        <div data-role='fieldcontain'>
            <label></label>
            <div id='times'>
            <input data-transition='slide' type='submit' value='Sign Up Its Free!' id='times'>
            </div>
        </div>
    </form>
_END;
  require_once 'footer.php';
?>