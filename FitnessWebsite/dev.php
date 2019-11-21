<?php
session_start();
require_once 'header.php';
    $error = $user = $pass = "";
echo<<<_END
<div class ="container">
    <h1>Meet Swole Team Six</h1>
    <div class ="d-md-block">
    <h3><img id = 'Zac' src='img/zac.jpg' alt='Zac' height='300' weight='300'></h3>
    <p>This is Zac, he may or may not have an extra chromosone were not sure.</p>
    <h3><img id = 'Nayte' src='img/Nayte.jpg' alt='Nayte' height='350' weight='350'></h3>
    <p>This is Nayte, he party hards during the week and eats ass on the weekends.</p>
    <h3><img id = 'Christian' src='img/Christian.jpg' alt='Christian' height='300' weight='300'></h3>
    <p>This is Christian, he may be a computer scientist but can beat anyone in a shotgun race.</p>
    <h3><img id = 'Mike' src='img/Mike.jpg' alt='Mike' height='300' weight='300'></h3>
    <p>This is Mike, he throws low die.</p>
    </div>
</div>
_END;
require_once 'footer.php';
?>
