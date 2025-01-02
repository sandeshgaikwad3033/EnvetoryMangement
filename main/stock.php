<?php
$Q=0;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$sqli = "SELECT * FROM `inventory`";
$result = mysqli_query($conn,$sqli);


?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="http://localhost/project/css/stock.css">;
    </head>
    <body>
        <div class="filter">

        </div>

        <table>
            <tr>
                <th>product code</th>
                <th>product name</th>
                <th>base price</th>
                <th>seilin price</th>
                <th>product date</th>
                <th>qantity</th>
            </tr>
            <?php

            while($row = mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                <td><?php echo $row['product_code']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['base_price']; ?></td>
                <td><?php echo $row['seiling_price']; ?></td>
                <td><?php echo $row['product_date']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
            </tr>
            <?php
            $Q += $row['quantity'];
            }
            ?>
            <tr>
                <th><a href="index.php">BACK</a></th>
                <th colspan="4">Total:</th>
                <th><?php echo $Q; ?></th>
                
        </tr>
          
        </table>
    </body>
</html>