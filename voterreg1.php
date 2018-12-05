<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";
if($_POST['Submit']=="Submit")
{
$name=$_POST['name'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$fathername=$_POST['fname'];
$mothername=$_POST['mname'];
$email=$_POST['email'];
$voterid=$_POST['vid'];
$voterpassword=$_POST['vpsw'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO voters (name,age,dob,gender,address,fathername,mothername,email,voterid,voterpassword)
VALUES('$name','$age','$dob','$gender','$address','$fathername','$mothername','$email','$voterid','$voterpassword')";

if ($conn->query($sql) === TRUE) {
    echo '<script>	alert("ThankYou for registration");
window.location.href = "index.htm";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>