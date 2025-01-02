
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

$id = $_POST['id'];
$name = $_POST['name'];
$baseprice = $_POST['baseprice'];
$seilingprice = $_POST['ceilingprice'];


$sqli = "SELECT * FROM `inventory`";
$result = mysqli_query($conn,$sqli);

while($row = mysqli_fetch_assoc($result))
{
    if($id == $row['product_code'])
    {
        $_SESSION['status'] = "product id is tekan..";
        header("location:http://localhost/project/main/items/addnewitems.php");
        exit();
    }
}

$query = "INSERT INTO `inventory` (`product_code`, `product_name`, `base_price`, `seiling_price`) VALUES ('$id', '$name', '$baseprice', '$seilingprice')";
$result2 = mysqli_query($conn,$query);

if($result2)
{
    $_SESSION['massage'] = "item save in data base..";
    header("location:http://localhost/project/main/items/addnewitems.php");
}
else
{
    echo "data not save in data base..";
}

?>