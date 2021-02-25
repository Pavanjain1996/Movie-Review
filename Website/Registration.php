<?php
session_start();
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$username=$_POST["username"];
$password=$_POST["password"];
$mobile=$_POST["mobile"];
$gender=$_POST["gender"];
$category=$_POST["category"];
$email=$_POST["email"];
$movietype=$_POST["movietype"];
$con=mysqli_connect("localhost","root","123456789");
mysqli_select_db($con,"movie");
$query='insert into userdata values ("'.$fname.'","'.$mname.'","'.$lname.'","'.$username.'","'.$password.'","'.$mobile.'","'.$gender.'","'.$category.'","'.$email.'","'.$movietype.'")';
mysqli_query($con,$query);
$query='create table review_'.$username.'(movie varchar(100),type varchar(15),language varchar(10),starcast varchar(200),rating double,story varchar(10000),review varchar(10000))';
mysqli_query($con,$query);
$_SESSION['logstatus']='YES';
$_SESSION['username']=$username;
mysqli_close($con);
header('location:Home.php');
?>