<?php
//connect database
$conn=mysqli_connect("localhost","root","","booking");
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
else
{
if(isset($_POST['submit']))
{
$fullname=$_POST['full_name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$idno=$_POST['id_No'];
$cell=$_POST['cell'];
$village=$_POST['village'];
$password=$_POST['password'];
$confirm=$_POST['confirm_password'];  
$verify=mysqli_query($conn,"SELECT email FROM customers WHERE email='$email'");
if(mysqli_num_rows($verify)!=0)
{
echo"email has used,try another one";
}
else
{
    mysqli_query($conn,"INSERT INTO customers(fullname,dob,email,mobile,gender,id_No,cell,village,password,confirm) VALUES('$fullname','$dob','$email','$gender','$idno','$cell','$village','$password','$confirm')");
    echo"registration successful";
}
}
}
?>