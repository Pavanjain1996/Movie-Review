<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="Images/Logo.png">
</head>
<body>
<style>
a.nav-link:hover{
  background-color:black;
}
</style>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-danger" style="height:97px;">
<img src="Images/Logo.png" width="40" height="40" class="d-inline-block align-top">&nbsp;
<a class="navbar-brand" href="Home.php" style="color:white;font-size:40px;">CineSnob</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="Home.php" style="color:white;font-size:20px;">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Login.php" style="color:white;font-size:20px;">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Register.php" style="color:white;font-size:20px;">Register</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Profile.php" style="color:white;font-size:20px;"><?php 
if(isset($_SESSION['logstatus'])){
  if($_SESSION['logstatus']=='YES'){
    echo $_SESSION['username'];
  }
}
?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="Review.php" style="color:white;font-size:20px;"><?php 
if(isset($_SESSION['logstatus'])){
  if($_SESSION['logstatus']=='YES'){
    echo "Write a Review";
  }
}
?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="Logout.php" style="color:white;font-size:20px;"><?php 
if(isset($_SESSION['logstatus'])){
  if($_SESSION['logstatus']=='YES'){
    echo "Logout";
  }
}
?></a>
</li>
</ul>
<form class="form-inline my-2 my-lg-0" method="post" action="SearchReviews.php">
<input class="form-control mr-sm-2" type="search" name="searchmovie" placeholder="Search for Movies..........." aria-label="Search">
<button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>
<br/><br/><br/><br/>