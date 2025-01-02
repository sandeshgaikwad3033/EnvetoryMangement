<?php

session_start();

$serverneme = "localhost";
$useneme = "root";
$password = "";
$database = "main";
$conn = mysqli_connect($serverneme,$useneme,$password,$database);
if(!$conn)
{
    echo "not conection succefully..";
}

$id = $_POST['ID'];
$pass = $_POST['pass'];

$sql = "select * from users where ID='$id' AND PASS='$pass'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['user_id'] = $id;
    $_SESSION['user_pass'] = $pass;
   header("location:http://localhost/project/main/index.php");
}
else
{
    $_SESSION['status'] = "ID or Password is incorrect....";
    header("location:http://localhost/project/main/start.php");
}
?>


