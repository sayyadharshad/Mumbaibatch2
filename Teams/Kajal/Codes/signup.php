<?php

$con=new mysqli("localhost","newuser","password","mydb");

if($con->connect_error){
die("ERROR unable to connect:".$con->connect_error);
}
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$pw = $_POST['pass'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$sql = "call insertdata('$fname','$lname','$pw','$email','$gender')";

if(mysqli_query($con, $sql)){
    echo "<script>
    alert('Welcome to HealthCare,Your Records save successfully');
    window.location.href='login.html';
    </script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
mysqli_close($con);
?>
