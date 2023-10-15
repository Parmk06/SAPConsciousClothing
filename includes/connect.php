<?php

$con=mysqli_connect('localhost','root','','mystore');
if($con){
   echo " die(mysqli_error($con));";
}
?>

<!-- die(mysqli_error($con)); -->
<!-- echo "connection successful"; --> 
<!-- Upper line was there instead of DIE and ECHO line has been removed -->


