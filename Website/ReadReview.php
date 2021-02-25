<?php
include('Header.php');
$movie=$_POST['movies'];
$username=$_POST['username'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'movie');
$query='select * from review_'.$username.' where movie="'.$movie.'"';
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
?>
<style>
label{
    text-decoration:underline;
    font-weight:bold;
    font-size:20px;
}
span{
    font-size:20px;
    color:red;
    font-family:comic sans ms;
}
</style>
<div class="jumbotron jumbotron-fluid">
<div class="container">
<div class="row">
<div class="col-md-12">
<label>Movie</label><span><?php echo ' : '.$row['movie']; ?></span>
</div>
<div class="col-md-12">
<label>Type</label><span><?php echo ' : '.$row['type']; ?></span>
</div>
<div class="col-md-12">
<label>Language</label><span><?php echo ' : '.$row['language']; ?></span>
</div>
<div class="col-md-12">
<label>Starcast</label><span><?php echo ' : '.$row['starcast']; ?></span>
</div>
<div class="col-md-12">
<label>Ratings</label><span><?php echo ' : '.$row['rating']; ?></span>
</div>
<div class="col-md-12">
<label>Story</label><span><?php echo ' : '.$row['story']; ?></span>
</div>
<div class="col-md-12">
<label>Review</label><span><?php echo ' : '.$row['review']; ?></span>
</div>
</div>
</div>
</div>
</div>
<?php
include('Footer.php');
?>