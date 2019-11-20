<?php
session_start();
require_once 'header.php';

if ($loggedin) 
    echo " $user, you are logged in";
else           
echo <<<_END
<h1> Welcome to Fitness Bros! </h1>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/exercise.jpg" alt="Lift">
        <div class="carousel-caption d-none d-md-block">
        <h5>Relevant blogs on Health</h5>
        <p>Everything from diet, current trends, and more</p>
      </div>
      </div>

      <div class="carousel-item">
        <img src="img/weightroom.jpg" alt="Weights">
        <div class="carousel-caption d-none d-md-block">
        <h5>Workouts Specialized for you!</h5>
        <p>A specialized workout creator for day-to-day routines</p>
      </div>
      </div>

      <a href="http://localhost/FitnessWebsite/FitnessWebsite/dev.php">
      <div class="carousel-item">
        <img src="img/matrix.jpg" alt="Matrix">
        <div class="carousel-caption d-none d-md-block">
        <h5 class = "p5">Meet the Devs!</h5>
        <p class = "p5">Meet the people who made this a reality</p></a>
      </div>
      </div>
    </div>

    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <hr class="featurette-divider">
  <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Exercising the right way</h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/ptrainer.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">See improvements within days. <span class="text-muted">Come see for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="img/food.jpg" alt="food">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Checkout the Github Repo!</h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/github.png" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->

_END;

require_once 'footer.php';
?>