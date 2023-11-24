<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='eyecare';


$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);


if(!$con)
{
  die("connection:".mysqli_connect_error());
}
?>

