<?php

$conn= mysqli_connect("localhost","root","","urvashi");
if(!$conn)
{
    die("Connection failed :".  mysqli_connect_error());
}
$uid = $_POST['username'];
$pwd = $_POST['password'];

$sql = "select * from user where username='$uid' and password='$pwd'";
if ($result = $conn->query($sql))
    {
        if(!$row = $result->fetch_assoc())
        {
            echo "Username or Password incorrect";
        }
         else 
        {
            session_start();
            $_SESSION['login_user'] = $uid;
            $_SESSION['pwd'] = $pwd;
            header("location:t.php");
        }
    }
else 
    {
    echo"User not found..!";
    }
  ?>