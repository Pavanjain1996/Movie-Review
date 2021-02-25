<head>
<title>CineSnob</title>
</head>
<?php
include('Header.php');;
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Images/EkVillian.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Ek Villian</h5>
        <p>Staring Siddhart Malhotra, Shraddha Kapoor and Ritesh Deshmukh.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/HateStory3.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Hate Story 3</h5>
        <p>Staring Sharman Joshi, Karan Singh Grover, Zareen Khan and Daisy Shah.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/BankChor.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Bank Chor</h5>
        <p>Staring Rhea Chakraborty, Vivek Oberoi and Ritesh Deshmukh.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/Rockstar.jpg" alt="Fourth slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Rockstar</h5>
        <p>Staring Ranbir Kapoor and Nargis Fakhri.</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php
include('Footer.php');
?>