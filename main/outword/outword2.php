

<?php

session_start();

$id = $_POST['pid'];
$quntity = $_POST['q'];
$cname = $_POST['cid'];
$pdate = $_POST['pdate'];
$pname ;
$pselingprice;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$finalupdate1;
$id;
$quntity;
$updatevalue1;
$sqli = "SELECT * FROM `inventory`";
$result = mysqli_query($conn,$sqli);
if(isset($_POST))
{
while($row = mysqli_fetch_assoc($result))
{
    if($id == $row['product_code'])
    {
        $updatevalue1 = $row['quantity'];
        $pname = $row['product_name'];
        $pselingprice = $row['seiling_price'];
    }
}
   if(($updatevalue1 == 0) || ($updatevalue1 < $quntity))
     {
        $_SESSION['status'] = "not avalable quantity..";
        header("location:http://localhost/project/main/outword/outword1.php");
        exit();
     }
  $finalupdate1 = $updatevalue1 - $quntity;
}


 $sql = "UPDATE `inventory` SET `quantity` = '$finalupdate1' WHERE `product_code` = '$id'";
 $result2 = mysqli_query($conn,$sql);

 $sql1 = "INSERT INTO `outword_date` (`product_code`, `product_name`, `ceiling_price`, `customer_name`, `quantity`, `product_date`) VALUES ('$id', '$pname', '$pselingprice', '$cname', '$quntity', '$pdate')";
 $result2 = mysqli_query($conn,$sql1);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
        
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Receipt</h1>
    <table border="n" style=" width: 100%; text-align: center; border-collapse: collapse;"   >
        <tr>
            <th>product ID</th>
            <th>Product Name</th>
            <th>base price</th>
            <th>purchase date</th>
            <th>quaintity</th>
        </tr>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $pname; ?></td>
            <td><?php echo $pselingprice; ?></td>
            <td><?php echo $pdate ?></td>
            <td><?php echo $quntity?></td>
        </tr>
        <tr>
            <th colspan="4">total</th>
            <th><?php echo $pselingprice * $quntity; ?></th>
        </tr>
    </table>
    <p>Thanku</p>
    <div style="text-align: center;">
    <button onclick="window.print()">print</button>
    </div>

</body>
</html>