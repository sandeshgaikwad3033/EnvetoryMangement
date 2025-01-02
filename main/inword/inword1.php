

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
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="stock.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<title>Drop-down Selection Data Load with ajax, PHP & MySQL</title>
<script type="text/javascript" src="getData.js"></script>

</head>
<body class="">
<div class="filter"></div>
<div class="container" style="min-height:500px;">
	<div class=''>
	</div>

<div class="container">
	
	<div class="" id="errorMassage"></div>
	<form action="inword2.php" method="post">
	<table class="table table-striped hidden" id="recordListing">
		<thead>
		  <tr>
			<th colspan="2">Inword_data</th>
		  </tr>
		</thead>
		<tbody>
			<tr>
				<td>purchase date</td>
				<td><input type="date" name="pdate"></td>
			</tr>
		<tr>
			<td>select product code</th>
			<td>
			<select id="employee"  name="pid" class="form-control" >
				<option value="" selected="selected">Select product code</option>
				<?php
				$sql = "SELECT product_code, product_name, base_price, seiling_price FROM inventory";
				$resultset = mysqli_query($conn, $sql);
				while( $rows = mysqli_fetch_assoc($resultset) ) { 
				?>
				<option value="<?php echo $rows["product_code"]; ?>"><?php echo $rows["product_code"]; ?></option>
				<?php 
				}	
				?>
			</select>
			</td>
		  </tr>
		  <tr>
			<td>Vendor Name</td>
			<td>
			<select id=""  name="vid" class="form-control" >
				<option value="" selected="selected">Select Vendor Name</option>
				<?php
				$sql = "SELECT v_id, v_name, v_email, v_phone FROM vendors";
				$resultset = mysqli_query($conn, $sql);
				while( $rows = mysqli_fetch_assoc($resultset) ) { 
				?>
				<option value="<?php echo $rows["v_name"]; ?>"><?php echo $rows["v_name"]; ?></option>
				<?php 
				}	
				?>
			</select>

			</td>
		  </tr>
		  <tr>
			<td>product code :</td>
			<td id="productId"><input type="text" name="pid"></td>
		  </tr>
		  <tr>
			<td>product name :</td>
			<td id="productName"><input type="text" name="pname"></td>
		</tr>
		<tr>
			<td>base price :</td>
			<td id="basePrice"><input type="text" name="pbaseprice"></td>
		</tr>
		<tr>
			<td>quantity :</td>
			<td><input type="text" name="q"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Back" name="delete"></td>
			<td><input type="reset" value="reset"><input type="submit" value="submit"></td>
		</tr>
		</tbody>
	</table>       
	</form>	<?php
	if(isset($_SESSION['status']))
            {
                echo $_SESSION['status'];
                unset($_SESSION['status']);
            }
			?>
	
</div>
<div class="insert-post-ads1" style="margin-top:20px;">

</div>
</div>
</body></html>




