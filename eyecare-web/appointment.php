<?php
include 'connection.php';
print_r($_REQUEST);
if(isset($_POST['submit']))
  {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobileno=$_POST['mobileno'];
  $city=$_POST['city'];
  $dob=$_POST['dob'];
  $time=$_POST['time'];
  $doctor=$_POST['doctor'];
  $surgery=$_POST['surgery'];
  $msg=$_POST['msg'];
  

  $sql="INSERT INTO eye (name,email,mobileno,city,dob,time,doctor,surgery,msg)VALUES('$name','$email','$mobileno','$city','$dob','$time','$doctor','$surgery','$msg')";
  $res=mysqli_query($con,$sql);
  if ($res==1) 
  {
    echo"<script>alert('Booked successfully')</script>";
    header("Location: index.html");


  }
  else
  {
      echo "Booking Failed ".$sql;
  }

}


?>



