<?php
include('Header.php');
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'movie');
?>
<head>
<title>CineSnob - Reviews <?php echo $_SESSION['username']; ?></title>
</head>
<div class="jumbotron jumbotron-fluid">
<div class="container">
<div class="row">
<div class="col-md-12">
<span style="font-size:40px;color:blue;"><u>Reviews - <?php echo $_SESSION['username']; ?></u></span>
</div>
</div>
<br/>
<style>
.review{
    font-size:20px;
    color:purple;
}
</style>
<?php
$query='select * from review_'.$_SESSION['username'];
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=$n;$i++){
    $row=mysqli_fetch_array($res);
    echo '<form method="post" action="CompleteReview.php" class="review">';
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo '<input type="text" value="'.$row['movie'].'" class="form-control" name="movies" style="font-size:20px;color:purple;" readonly>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<label>Type - '.$row['type'].'</label>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<label>Language - '.$row['language'].'</label>';
    echo '</div>';
    echo '<div class="col-md-3">';
    echo '<label>Starcast - '.$row['starcast'].'</label>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<label>Ratings - '.$row['rating'].'</label>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<button type="submit" class="btn btn-primary">Read full Review</button>';
    echo '</div>';
    echo '</div>';
    echo '</form><br/>';
}
?>
</div>
</div>
<?php
include('Footer.php');
?>