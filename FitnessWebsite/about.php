<?php
require_once 'header.php';
$error = $user = $pass = "";


echo <<<_END
<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">About Us</h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" id="img-fluid3" src="img/landscape1.jpg" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Our Goal</h3>
      <p>Here at Fitness Bros we strive to help people increase their physicial health through routine exercise. By exercising your body regularly, you can increase both your mental health and your lifespan. The growing community here at Fittness bros aim to grow even firther to reach more people and better more lives.</p>
      <h3 class="my-3">Our Motto and its Meaning</h3>
      <p><div><strong>"Strive to Succeed"</strong></div>The entire team at Fittness Bros is serious about success. This is the core motivation for what we do. Sharing and spreading this need for success is what makes our community so great. In the words of our lord and savior <em>“Strength does not come from winning. Your struggles develop your strengths. When you go through hardships and decide not to surrender, that is strength.”</em> – Arnold Schwarzenegger.</p>
    </div>

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Testimonies to our Success</h3>

  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
    <figure class="figure">
            <img class="img-fluid" id="img-fluid2" src="img/before1.jpg" alt="">
    <figcaption class="figure-caption">Beofre using Fittness Bros</figcaption>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
    <figure class="figure">
            <img class="img-fluid" id="img-fluid2" src="img/after1.jpg" alt="">
          <figcaption class="figure-caption">After using Fittness Bros</figcaption>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
    <figure class="figure">
            <img class="img-fluid" id="img-fluid2" src="img/before2.jpg" alt="">
          <figcaption class="figure-caption">Beofre using Fittness Bros</figcaption>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
    <figure class="figure">
            <img class="img-fluid" id="img-fluid2" src="img/after2.jpg" alt="">
          <figcaption class="figure-caption">After using Fittness Bros</figcaption>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
    <figure class="figure">
            <img class="img-fluid" id="img-fluid2" src="img/before3.jpg" alt="">
          <figcaption class="figure-caption">Beofre using Fittness Bros</figcaption>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
    <figure class="figure">
            <img class="img-fluid" id="img-fluid2" src="img/after3.jpg" alt="">
          <figcaption class="figure-caption">After using Fittness Bros</figcaption>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
_END;
require_once 'footer.php';
?>
