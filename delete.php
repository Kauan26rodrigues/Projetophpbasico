<?php
include 'connect.php';
include 'check.php';

    $s="select * from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);

$sq="delete from reg where id='$_SESSION[id]'";

mysqli_query($con,$sq);

header('location:login.php');
?>