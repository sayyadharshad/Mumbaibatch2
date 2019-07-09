<?php
$servername = "localhost";
$username = "jyoti";
$password = "jyoti123";
$dbname = "igc";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['psw'];
$country=$_POST['countySel'];
$state=$_POST['stateSel'];
$district=$_POST['districtSel'];
$dob=$_POST['DOB'];
$sql = "call insertdata('$fname','$lname','$email','$password','$country','$state','$district','$dob')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
