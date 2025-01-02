

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



$id = $_POST['id'];
$name = $_POST['name'];


$query = "DELETE FROM inventory WHERE product_code = '$id'";
$data = mysqli_query($conn,$query);

if($data)
{
    $_SESSION['massage'] = "item is delete in data base..";
    header("location:http://localhost/project/main/items/deleteitem.php");
}
?>