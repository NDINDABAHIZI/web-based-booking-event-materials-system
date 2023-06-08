<?php
$conn=mysqli_connect("localhost","root","","Booking");
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
else
{
if(isset($_POST['login']))
{
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $result=mysqli_query($conn,"SELECT *FROM customers WHERE email='$email' AND password='$password'") or die("select error");
    $row=mysqli_fetch_assoc($result);
    echo"login successful";
}
else
{
    echo"Fail to login";
}
}
?>