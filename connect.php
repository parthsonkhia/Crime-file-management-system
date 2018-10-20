<?php

$conn=mysqli_connect('localhost','root','');
if(!$conn){
echo mysql_error();
}


$database=mysqli_select_db($conn,"crime");
if(!$database)
{
echo mysql_error();
}


?>


                     
