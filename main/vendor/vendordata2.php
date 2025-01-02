<?php

if(isset($_POST['back']))
{
    header('location:http://localhost/project/main/index.php');
    exit();
}

?>


<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


if(isset($_POST['submit']))
{
    $vname = $_POST['name'];
    $vemail = $_POST['email'];
    $vaddress = $_POST['address'];
    $vphone = $_POST['phone'];
    $vbdate = $_POST['bdate'];
    $vgender = $_POST['gender'];



    $sql = "INSERT INTO `vendors` (`v_id`, `v_name`, `v_address`, `v_email`, `v_phone`, `birth_date`, `v_gender`) VALUES (NULL, '$vname', '$vaddress', '$vemail', '$vphone', '$vbdate', '$vgender')";
    $result = mysqli_query($conn,$sql);

    
    if($result)
     {
        $_SESSION['status'] = "data save in data base..";
        header("location:http://localhost/project/main/vendor/vendordata.php");
     }
    else
    {
        echo "<script> alert('record is not save ..')</script>";
    }

}


?>