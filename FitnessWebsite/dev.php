<?php
session_start();
require_once 'header.php';
echo<<<_END
<ul class="team">
<li><img id = 'Zac' src='img/zac.jpg' alt='Zac' height='180' weight='180'></li>
    <p>This is Zac, he may or may not have an extra chromozone were not sure</p>
<li><img id = 'Nayte' src='img/Nayte.jpg' alt='Nayte' height='180' weight='180'></li>
    <p>This is Nayte, he party hards during the week and eats ass on the weekends</p>
<li><img id = 'Christian' src='img/Christian.png' alt='Christian' height='180' weight='180'></li>
    <p>This is Christian, hes the definition of 10-ply.</p>
<li><img id = 'Mike' src='img/Mike.png' alt='Mike' height='180' weight='180'></li>
    <p>This is Mike, he throws low die</p>
</ul>
_END
?>
