<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$flag=0;
$con=mysqli_connect("localhost","root","123456789");
mysqli_select_db($con,"movie");
$query='select username,password from userdata';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=$n;$i++){
    $row=mysqli_fetch_array($res);
    if($row['username']==$username && $row['password']==$password){
        $_SESSION['logstatus']='YES';
        $_SESSION['username']=$username;
        $flag=1;
        break;
    }
}
mysqli_close($con);
if($flag==1)
    header('location:Home.php');
else
    header('location:Login.php');
?>