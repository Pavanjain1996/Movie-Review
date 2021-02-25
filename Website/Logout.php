<?php
session_start();
$_SESSION['logstatus']='NO';
$_SESSION['username']='';
session_destroy();
header('location:Home.php')
?>