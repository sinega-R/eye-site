
<?php
include 'connection.php';
print_r($_REQUEST);
if(isset($_POST['submit']))
  {
    $mailto = "sinegarajendran12@gmail.com";
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobileno=$_POST['mobileno'];
  $city=$_POST['city'];
  $dob=$_POST['dob'];
  $time=$_POST['time'];
  $doctor=$_POST['doctor'];
  $surgery=$_POST['surgery'];
  $msg=$_POST['msg'];
  $subject2="your apointment submitted successfully";
  $message="Dear". $name."/n/n"."Thank You for contacting us! We'll get back to you shortly";
  $header1= "email:" .$email;
  $header2= "email:" .$mailto;
  $result =mail($mailto,$name,$email,$mobileno,$city,$dob,$time,$doctor,$surgery);
  $result2 =mail($subject2,$message,$header2);
  


  $sql="INSERT INTO register(name,email,mobileno,city,dob,time,doctor,surgery,msg)VALUES('$name','$email','$mobileno','$city','$dob','$time','$doctor','$surgery','$msg')";
  $res=mysqli_query($con,$sql);
  if ($result) 
  {
   echo '<script> alert("message was send successfully)</script>'

  }
  else
  {
      echo "Data Insert Failed ".$sql;
  }

}


?>


