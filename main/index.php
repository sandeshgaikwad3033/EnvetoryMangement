
<?php
$serverneme = "localhost";
$useneme = "root";
$password = "";
$database = "main";
$conn = mysqli_connect($serverneme,$useneme,$password,$database);
if(!$conn)
{
    echo "not conection succefully..";
}

 session_start();



$userprofile = $_SESSION['user_id'];
$userpass = $_SESSION['user_pass'];

if($userprofile != NULL)
{

}
else
{
	header('location:start.php');
}
?>
<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>Invetory Management System</title> 
	<link rel="stylesheet"
		href="http://localhost/project/css/style.css"> 
	<link rel="stylesheet"
		href="http://localhost/project/css/responsive.css"> 

		<link rel="stylesheet"
		href="http://localhost/project/css/data.css"> 
</head> 

<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo">Invetory management</div> 
			<img src= "http://localhost/project/image/1.png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon"> 
		</div> 
		


		<div class="message"> 
			 <a href="logout.php">
			<img src= "http://localhost/project/image/logout.png"
				class="icn"
				alt=""> </a>
				Welcome To <?php echo $userprofile; ?>
				<img src= "http://localhost/project/image/line.png"
				class="icn"
				alt="">
				<?php
				  if($userprofile == 'sandesh' && $userpass == 'sonu@1085')
				  {
					?>
					<div class="dp"> 
			<img src= "http://localhost/project/image/sonu.jpeg"
					class="dpicn"
					alt="dp"> 
			</div>
			<?php
				  }
				  else
				  {
					?>
					<div class="dp"> 
			<img src= "http://localhost/project/image/yogesh.jpeg"
					class="dpicn"
					alt="dp"> 
			</div> 
			<?php
			  }
			?>
		</div> 

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<div class="nav-option option1"> 
						<img src= "http://localhost/project/image/dashbord.png"
							class="nav-img"
							alt="dashboard"> 
						<h3> Dashboard</h3> 
					</div> 
					<a href="stock.php">
					<div class="option2 nav-option"> 
						<img src= "http://localhost/project/image/stock.png"
							class="nav-img"
							alt="articles"> 
						<h3> stock</h3> 
					</div> 
					</a>

					<a href="inword/inword1.php">
					<div class="nav-option option4"> 
						<img src= "http://localhost/project/image/inword.png"
							class="nav-img"
							alt="institution"> 
						<h3> Inward</h3> 
					</div> 	
				    </a>

					<a href="outword/outword1.php">
					<div class="nav-option option3"> 
						<img src= "http://localhost/project/image/outword.png"
							class="nav-img"
							alt="report"> 
						<h3> Outward</h3> 
					</div> 
                  </a>

				  <a href="report/report.php">
					<div class="nav-option option5"> 
						<img src= "http://localhost/project/image/report.png"
							class="nav-img"
							alt="blog"> 
						<h3> Report</h3> 
					</div> 
					</a>

					<a href="items/addnewitems.php">
					<div class="nav-option option6"> 
						<img src= "http://localhost/project/image/additem.png"
							class="nav-img"
							alt="settings"> 
						<h3> Add Item</h3> 
					</div> </a>

					<a href="items/deleteitem.php">
					<div class="nav-option option6"> 
						<img src= "http://localhost/project/image/delete.png"
							class="nav-img"
							alt="settings"> 
						<h3> Delete Item</h3> 
					</div> </a>

					<a href="logout.php">
						<div class="nav-option logout"> 
							<img src= "http://localhost/project/image/logout.png"
								class="nav-img"
								alt="logout"> 
							<h3>logout</h3>
						</div> 
						</a>
				</div> 
			</nav> 
		</div> 
		<div class="main"> 

			<div class="searchbar2"> 
				<input type="text"
					name=""
					id=""
					placeholder="Search"> 
				<div class="searchbtn"> 
				<img src= "http://localhost/project/image/search.png"
						class="icn srchicn"
						alt="search-button"> 
				</div> 
			</div> 

			<div class="box-container"> 
			<a href="stock.php">
				<div class="box box1"> 
					<div class="text"> 
						<h2 class="topic-heading"></h2> 
						<h2 class="topic">Final stock</h2> 
					</div> 

					<img src= "http://localhost/project/image/finalstock.png"
						alt="Views"> 
				</div> </a>

				
				<a href="vendor/vendordata.php">				
				<div class="box box3"> 
					<div class="text"> 
						<h2 class="topic-heading"></h2> 
						<h2 class="topic">Vendor</h2> 
					</div> 

					<img src= "http://localhost/project/image/vendor.png";
						alt="comments"> 
				</div> </a>

				<a href="customer/customerdata.php">				
				<div class="box box4"> 
					<div class="text"> 
						<h2 class="topic-heading"></h2> 
						<h2 class="topic">Customer</h2> 
					</div> 

					<img src= "http://localhost/project/image/customer1.png" alt="published"> 
				</div> 
			</a>
			</div> 
			
			<div class="report-container"> 
				<div class="report-header"> 
					<h1 class="recent-Articles">Low quantity of Items</h1> 

			<div class="searchbar"> 
			    <input type="text"placeholder="Search" id="myInput" onkeyup="searchfun()"> 
			    <div class="searchbtn"> 
			    <img src= "http://localhost/project/image/searchicon.png"class="icn srchicn"alt="search-icon"> </div> 
		    </div> 
				</div> 	
			     <div>
		        <table id="myTable"> 
		                <tr>
							<th>product code</th>
							<th>product name</th>
							<th>quaintity</th>
							
						</tr>				
				
				 <?php					
$sqli5 = "SELECT * FROM `inventory`";
$result5 = mysqli_query($conn,$sqli5);

while($row = mysqli_fetch_assoc($result5))
{
    if($row['quantity'] <= 20)
    {
		?>
						<tr>
							<td><?php echo $row['product_code']; ?></td>
							<td><?php echo $row['product_name']; ?></td>
							<td><?php echo $row['quantity']; ?></td>
							
						</tr>

<?php
    }
} 
?>
			</table>
				    </div>
			</div>
			

		<script src="./index.js"></script> 
		<script>
			const searchfun(){
				let filter = document.getElementById('myInput').value.toUpperCase();

				let myTable = document.getElementById('myTable');

				let tr = myTable.getElementsByTagName('tr');

				for(var i=0; i<tr.length; i++)
				{
					let td = tr[i].getElementsByTagName('td')[1];

					if(td)
					{
						let textvlaue = td.textContent || td.innerHTML; 

						if(textvlaue.toUpperCase().indexOf(filter) > -1)
						{
							tr[i].style.display = "";
						}else{
							tr[i].style.display = "none";
						}
					}
				}


			}
		</script>
</body> 
</html>