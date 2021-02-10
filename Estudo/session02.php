<?php 

session_start(); 

echo"views = ".$_SESSION['views'];

unset($_SESSION['views']);


?> 