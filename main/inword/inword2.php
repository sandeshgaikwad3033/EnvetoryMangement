
<?php

if(isset($_POST['delete']))
{
    header('location:http://localhost/project/main/index.php');
    exit();
}

?>

<?php
$id = $_POST['pid'];
$quntity = $_POST['q'];
$vname = $_POST['vid'];
$pdate = $_POST['pdate'];
$pname ;
$pbaseprice ;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$updatevalue = 0;
$sqli = "SELECT * FROM `inventory`";
$result = mysqli_query($conn,$sqli);

while($row = mysqli_fetch_assoc($result))
{
    if($id == $row['product_code'])
    {
        $updatevalue = $row['quantity'];
        $pname = $row['product_name'];
        $pbaseprice = $row['base_price'];
    }
}

$finalupdate = $quntity + $updatevalue;

 $sql = "UPDATE `inventory` SET `quantity` = '$finalupdate' WHERE `product_code` = '$id'";
 $result2 = mysqli_query($conn,$sql);


 $sql1 = "INSERT INTO `inword_data` (`product_code`, `product_name`, `base_price`, `vendor_name`, `quantity`, `product_date`) VALUES ('$id', '$pname', '$pbaseprice', '$vname', '$quntity', '$pdate')";
 $result3 = mysqli_query($conn,$sql1);
// $sql1 = "INSERT INTO `inword_data` (`product_code`, `prodct_name`, `base_price`, `vendor_name`, `quantity`, `product_date`) VALUES ('$id', '$pname', '$pbaseprice', '$vname', '$quntity', '$pdate')";
// $result3 = mysqli_query($conn,$sql1);
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
            <th>quaintity</th>
        </tr>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $pname; ?></td>
            <td><?php echo $pbaseprice; ?></td>
            <td><?php echo $quntity?></td>
        </tr>
        <tr>
            <th colspan="3">total</th>
            <th><?php echo $pbaseprice * $quntity; ?></th>
        </tr>
    </table>
    <br>
    <div  style="text-align: center;">
    <button onclick="window.print()">print</button>
    </div>

</body>
</html>



