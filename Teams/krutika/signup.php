<?php
$con=new mysqli("localhost","krutika","krutika123","mydb");
if($con->connect_error)
{
die("ERROR unable to connect:".$con->connect_error);

}
echo "connected successfully";


$fname=mysqli_real_escape_string($con,$_REQUEST['firstname']);
$lname=mysqli_real_escape_string($con,$_REQUEST['lastname']);
$email=mysqli_real_escape_string($con,$_REQUEST['email']);
$pass=mysqli_real_escape_string($con,$_REQUEST['password']);
$gender=mysqli_real_escape_string($con,$_REQUEST['gender']);

$sql='call sign(fname,lname,pw,email,gender)';


$sql="INSERT INTO signin(fname,lname,email,pass,gender) values('$fname','$lname','$email','$pass','$gender')";
if(mysqli_query($con,$sql)){
echo"Record added successfully.";
}
else{
echo"ERROR: could not able to execute $sql.".mysqli_error($con);
}
mysqli_close($con);
?>
