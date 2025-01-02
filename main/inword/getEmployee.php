<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
if($_REQUEST['productId']) {
	$sql = "SELECT product_code, product_name, base_price, seiling_price FROM inventory WHERE product_code='".$_REQUEST['productId']."'";
	$resultSet = mysqli_query($conn, $sql);	
	$empData = array();
	while( $emp = mysqli_fetch_assoc($resultSet) ) {
		$empData = $emp;
	}
	echo json_encode($empData);
} else {
	echo 0;	
}
?>
