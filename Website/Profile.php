<?php
include('Header.php');
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'movie');
$query='select * from userdata where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
?>
<head>
<title>CineSnob - Profile <?php echo $_SESSION['username']; ?></title>
</head>
<style>
.profile label{
    color:red;
    font-size:20px;
    font-weight:bold;
}
.profile .form-control{
    font-size:20px;
    color:green;
    font-family:comic sans ms;
}
</style>
<div class="jumbotron jumbotron-fluid">
<div class="container">
<form class="profile">
<div class="row">
<div class="col-md-12">
<span style="font-size:40px;color:blue;"><u>Profile - <?php echo $_SESSION['username']; ?></u></span>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4">
<label>First Name</label>
<input type="text" class="form-control" value="<?php echo $row['first_name'];?>" readonly>
</div>
<div class="col-md-4">
<label>Middle Name</label>
<input type="text" class="form-control" value="<?php echo $row['middle_name'];?>" readonly>
</div>
<div class="col-md-4">
<label>Last Name</label>
<input type="text" class="form-control" value="<?php echo $row['last_name'];?>" readonly>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-6">
<label>Username</label>
<input type="text" class="form-control" value="<?php echo $row['username'];?>" readonly>
</div>
<div class="col-md-6">
<label>Password</label>
<input type="text" class="form-control" value="<?php echo $row['password'];?>" readonly>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4">
<label>Mobile No.</label>
<input type="text" class="form-control" value="<?php echo $row['mobile'];?>" readonly>
</div>
<div class="col-md-4">
<label>Gender</label>
<input type="text" class="form-control" value="<?php echo $row['gender'];?>" readonly>
</div>
<div class="col-md-4">
<label>Category</label>
<input type="text" class="form-control" value="<?php echo $row['category'];?>" readonly>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-6">
<label>Email ID</label>
<input type="text" class="form-control" value="<?php echo $row['email'];?>" readonly>
</div>
<div class="col-md-6">
<label>Interested Movie Area</label>
<input type="text" class="form-control" value="<?php echo $row['area_interest'];?>" readonly>
</div>
</div>
</form>
</div>
</div>
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
$query='select * from review_'.$_SESSION['username'].' limit 3';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=3 && $i<=$n;$i++){
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
<div class="row">
<div class="col-md-12">
<form method="post" action="AllReview.php">
<button type="submit" class="btn btn-success" style="width:100%">Show all Reviews</button>
</form>
</div>
</div>
</div>
</div>
<?php
include('Footer.php');
?>