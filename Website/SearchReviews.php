<?php
include('Header.php');
$movie=$_POST['searchmovie'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'movie');
$query='select * from movieuserdata where movie like "%'.$movie.'%"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n==0){ ?>
<div class="jumbotron jumbotron-fluid">
<div class="container">
<div class="row" style="text-align:center;font-size:75px;color:red;">
<div class="col-md-12">
OOPS! , NO RESULTS FOUND !!!
</div>
</div>
<div class="row" style="text-align:center;font-size:80px;color:red;">
<div class="col-md-12">
TRY BY ANOTHER NAME
</div>
</div>
</div>
</div>
<?php }
else{
    echo '<div class="jumbotron jumbotron-fluid"><div class="container">';
    for($i=1;$i<=$n;$i++){
        $row=mysqli_fetch_array($res);
        $query1='select * from review_'.$row['username'].' where movie="'.$row['movie'].'"';
        $res1=mysqli_query($con,$query1);
        $row1=mysqli_fetch_array($res1);
        echo '<form method="post" action="ReadReview.php">';
        echo '<div class="row">';
        echo '<div class="col-md-3">';
        echo '<input type="text" value="'.$row1['movie'].'" class="form-control" name="movies" style="font-size:20px;color:purple;" readonly>';
        echo '</div>';
        echo '<div class="col-md-2">';
        echo '<label>Starcast - '.$row1['starcast'].'</label>';
        echo '</div>';
        echo '<div class="col-md-2">';
        echo '<label>Ratings - '.$row1['rating'].'</label>';
        echo '</div>';
        echo '<div class="col-md-4">';
        echo '<input type="text" value="'.$row['username'].'" class="form-control" name="username" style="font-size:20px;color:purple;" readonly>';
        echo '</div>';
        echo '<div class="col-md-1">';
        echo '<button type="submit" class="btn btn-primary">Read full Review</button>';
        echo '</div>';
        echo '</div>';
        echo '</form><br/>';
    }
    echo '</div></div>';
}
 ?>
<?php
include('Footer.php');
?>