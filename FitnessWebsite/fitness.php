<?php
require_once 'header.php';
$error = $user = $pass = "";


echo <<<_END
<body>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Extra Wokrouts to Try</h1>
    <p class="lead font-weight-normal">Below are our featured workouts of the month. These exercises are sure to get you jacked. Make sure to to focus on your form to get a good pump.</p>
  </div>
  <div class="product-device box-shadow d-none d-md-block"></div>
  <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Big Bicept Curls</h2>
      <p class="lead">These specialized curls will give you the pump you need.</p>
    </div>
    <img class="img-fluid" src="img/curls.jpg" alt="curls">
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Lateral Pull Downs</h2>
      <p class="lead">These pulls will strengthewn your lats and back muscles greatly.</p>
    </div>
    <img class="img-fluid" src="img/lats.jpg" alt="lats">
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Chest Bench Presses</h2>
      <p class="lead">Push yourself to the max with this special bench pressing form.</p>
    </div>
    <img class="img-fluid" src="img/benches.jpg" alt="benches">
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Big Boy Shoulder Shrugs</h2>
      <p class="lead">Be sure to keep up on these refined shoulder shrugs and youll be ripped in no time.</p>
    </div>
    <img class="img-fluid" src="img/shrugs.jpg" alt="shrugs">
  </div>
</div>
</body>
_END;
require_once 'footer.php';
?>