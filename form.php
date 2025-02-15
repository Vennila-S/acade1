<?php
$n=$_POST['name'];
$c=$_POST['email'];
$a=$_POST['phone'];
$b=$_POST['subject'];
$d=$_POST['message'];
$con=mysqli_connect("localhost","root","","acade");
$sql="INSERT INTO contact(Name,Email,Phone,Subject,Message) values('$n','$c','$a','$b','$d')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "USER DETAILS ADDED SUCCESSFULLY";
}
else{
    echo "DETAILS NOT ADDED";
}
