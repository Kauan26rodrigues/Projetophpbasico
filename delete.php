<?php
include 'connect.php';
include 'checklogin.php';

$sq="delete from reg where id='$_SESSION[id]'";

mysqli_query($con,$sq);
<<<<<<< Updated upstream

header('location:login.php');
?>
=======
header('location:login.php');
?>
>>>>>>> Stashed changes
