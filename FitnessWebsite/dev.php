<?php
session_start();
require_once 'header.php';
    $error = $user = $pass = "";
echo<<<_END
<div class ="container">
    <h1>Meet The Team</h1>
    <div>
        <h3><img id = 'Zac' src='img/zac.jpg' alt='Zac' height='300' weight='300'></h3>
        <p class = "text-center">This is Zac, he is in a fraternaty but still sucks at pong.</p>
        <h3><img id = 'Nayte' src='img/Nayte.jpg' alt='Nayte' height='350' weight='350'></h3>
        <p class = "text-center">This is Nayte, he party hards during the week and not on the weekends.</p>
        <h3><img id = 'Christian' src='img/Christian.jpg' alt='Christian' height='300' weight='300'></h3>
        <p class = "text-center">This is Christian, he may be a computer scientist but can beat anyone in a shotgun race.</p>
        <h3><img id = 'Mike' src='img/Mike.jpg' alt='Mike' height='300' weight='300'></h3>
        <p class = "text-center">This is Mike, he throws low die.</p>
    </div>
    <div>
    <h1>&nbsp<h1>
    <h4 class = "text-center"> Apply to be a member of <strong>Swole Team Six</strong> email here:</h4>
    <h2 class ="text-center"> <strong> support@swolesix.com </strong> <h2>
    <h3><img id = 'Map' src='img/map.jpg' alt='Map' height='400' weight='400'></h3>
    <p class= "text-center">Located in Bozeman our Team is proud to have been providing websites for the last four years. However, if you do chose to work for us we offer the opportunity to work remotely. Why work for us? Swole Six prides itself with providing functional and efficient websites. We were voted the best company to get your foot into the profesional world of web development.</p>
    </div>
</div>
_END;
require_once 'footer.php';
?>
