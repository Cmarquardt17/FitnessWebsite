<?php
require_once 'header.php';
$error = $user = $pass = "";

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
        $error = 'Not all fields were entered';
    else {
        $result = queryMySQL("SELECT user,pass FROM members WHERE user='$user' AND pass='$pass'");

        if ($result->num_rows == 0) {
            $error = "Invalid login attempt";
        }
        else {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            die("<h3>Welcome back, $user.</h3><p>Please <a href='members.php?view=$user'>click here</a> to continue.</p></div><footer></footer></body></html>");
        }
    }
}

echo <<<_END
<div class="Cont">

    <button id="buttonLog" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/kitty.jpg" alt="Avatar" class="avatar">
    </div>

    <div data-role='fieldcontain'>
            <label></label>
            <h3>Enter username and password</h3>
        </div>
    <div data-role='fieldcontain'>
        <label style="color: black; margin-left: 15px;">Username</label>
        <input type='text' maxlength='16' name='user' value='$user'>
    </div>
    <div data-role='fieldcontain'>
        <label style="color: black; margin-left: 15px;">Password</label>
        <input type='password' maxlength='16' name='pass' value='$pass'>
    </div>
    <div data-role='fieldcontain'>
    <label></label>
    <input data-transition='slide' type='submit' value='Login'>
</div>
    </div>
</div>
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
_END;
require_once 'footer.php';
?>
