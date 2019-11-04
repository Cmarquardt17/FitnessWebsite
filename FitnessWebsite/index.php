<?php
session_start();
require_once 'header.php';

echo "<h3>Welcome to $clubstr. </h3>";
echo "<div>";

         
echo <<<_END
<!DOCTYPE html> 
<html>
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  
  <img src="img/pic1.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="img/pic2.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="img/pic3.jpg" style="width:100%">
  
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->

<script type='text/javascript'>window.onload=showSlides();</script>
_END;
echo <<<_END
    </div><br>
_END;

require_once 'footer.php';
?>