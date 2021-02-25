<?php
session_start();
if(isset($_SESSION['logstatus'])){
    if($_SESSION['logstatus']=='YES'){
        $movie=$_POST['moviename'];
        $type=$_POST['movietype'];
        $language=$_POST['language'];
        $starcast=$_POST['starcast'];
        $rating=$_POST['rating'];
        $story=$_POST['story'];
        $review=$_POST['review'];
        $con=mysqli_connect("localhost","root","123456789");
        mysqli_select_db($con,"movie");
        $query='insert into movieuserdata values ("'.$_SESSION['username'].'","'.$movie.'")';
        mysqli_query($con,$query);
        $query='insert into review_'.$_SESSION['username'].' values ("'.$movie.'","'.$type.'","'.$language.'","'.$starcast.'","'.$rating.'","'.$story.'","'.$review.'")';
        mysqli_query($con,$query);
        mysqli_close($con);
    }
}
header('location:Home.php');
?>