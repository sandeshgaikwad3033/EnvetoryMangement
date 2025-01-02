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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="style.css">
</head>
<style>
    html{
  scroll-behavior: smooth;
}
</style>
<body>
    <!-- =============== Navigation ================ -->
   
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title"></span>
                    </a>
                </li>




                <li>
                    <a href="#1" onclick="toggleSection1()">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Inword Sale</span>
                    </a>
                </li>

                <li>
                    <a href="#2" onclick="toggleSection2()">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Outword Sale</span>
                    </a>
                </li>

                <li>
                    <a href="#3">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>
                
                <li>
                    <a href="#4">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Vendors</span>
                    </a>
                </li>

                <li>
                    <a href="#5">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Less quantity items</span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/project/main/index.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">BACK</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                
                
                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>
            
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
            </div>
            
            <!-- ================ Order Details List ================= -->
            <section id="1">
            <div id="section1">
                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Total take items in this day </h2>
                            <form action="#" method="post">
                                    <input type="date" name="date"  value="select_date">
                                    <input type="submit" name="submit" value="submit">
                            </form>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>product code</td>
                                    <td>product name</td>
                                    <td>base price</td>
                                    <td>vendor name</td>
                                    <td>quantity</td>
                                    <td>product date</td>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php
                            if(isset($_POST['submit']))
                            {
                                $id = $_POST['date'];
                            
                            $sqli = "SELECT * FROM `inword_data`";
                            $result = mysqli_query($conn,$sqli);

                            while($row = mysqli_fetch_assoc($result))
                             { 
                               if($id == $row['product_date'])
                                 {
                                     ?>
        
        <tr class="tr">
        <td class="td"><div class="loader"><?php echo $row['product_code'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['product_name'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['base_price'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['vendor_name'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['quantity'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['product_date'] ?></div></td>
    </tr>
    <?php
    }
}
}
?>
                            </tbody>
                        </table>
                </div>
                
                <!-- ================= New Customers ================ -->
                
            </div>
            <button onclick="window.print()">print</button>
        </div>
    </section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section id="2">
        <div id="section2">
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Total sale in this day  </h2>
                            <form action="#" method="post">
                                    <input type="date" name="date1"  value="select_date">
                                    <input type="submit" name="submit1" value="submit">
                            </form>
                            
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                    <td>product code</td>
                                    <td>product name</td>
                                    <td>seiling price</td>
                                    <td>customer name</td>
                                    <td>quantity</td>
                                    <td>product date</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(isset($_POST['submit1']))
                            {
                                $id1 = $_POST['date1'];
                            
                            $sqli1 = "SELECT * FROM `outword_date`";
                            $result1 = mysqli_query($conn,$sqli1);

                            while($row1 = mysqli_fetch_assoc($result1))
                             { 
                               if($id1 == $row1['product_date'])
                                 {
                                     ?>
        
        <tr class="tr">
        <td class="td"><div class="loader"><?php echo $row1['product_code'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row1['product_name'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row1['ceiling_price'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row1['customer_name'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row1['quantity'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row1['product_date'] ?></div></td>
    </tr>
    <?php
    }
}
}

?>
                        </tbody>
                       </table>
                </div>

                <!-- ================= New Customers ================ -->
                
            </div>
            <button onclick="window.print()">print</button>
          </div>
          
        </section>
        <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
        <section id="3">
        <div id="section2">
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Customer information</h2>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                            <th><div class="thead">customer ID</div></th>
                                <th><div class="thead">customer Name</div></th>
                                <th><div class="thead">address</div></th>
                                <th><div class="thead">Email</div></th>
                                <th><div class="thead">phone</div></th>
                                <th><div class="thead">gender</div></th>
                                <th><div class="thead">birth date</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sqli = "SELECT * FROM `customers`";
                            $result = mysqli_query($conn,$sqli);
                        while($row = mysqli_fetch_assoc($result))
                             { 
                                     ?>
        
        <tr class="tr">
        <td class="td"><div class="loader"><?php echo $row['c_id'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['c_name'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['c_address'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['c_email'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['c_phone'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['c_gender'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['birth_date'] ?></div></td>
    </tr>
    <?php
    }
?>
                        </tbody>
                       </table>
                </div>

                <!-- ================= New Customers ================ -->
                
            </div>
            <button onclick="window.print()">print</button>
          </div>
    </section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section id="4">
            <div id="section1">
                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Vendor Information </h2>
                        </div>
                        <table class="table">
                        <thead>
                            <tr>
                            <th><div class="thead">Vendor ID</div></th>
                                <th><div class="thead">Vendor Name</div></th>
                                <th><div class="thead">address</div></th>
                                <th><div class="thead">Email</div></th>
                                <th><div class="thead">phone</div></th>
                                <th><div class="thead">gender</div></th>
                                <th><div class="thead">birth date</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sqli = "SELECT * FROM `vendors`";
                            $result = mysqli_query($conn,$sqli);
                        while($row = mysqli_fetch_assoc($result))
                             { 
                                     ?>
        
        <tr class="tr">
        <td class="td"><div class="loader"><?php echo $row['v_id'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['v_name'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['v_address'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['v_email'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['v_phone'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['v_gender'] ?></div></td>
        <td class="td"><div class="loader"><?php echo $row['birth_date'] ?></div></td>
    </tr>
    <?php
    }
?>
                        </tbody>
                       </table>
                       
                </div>

                <!-- ================= New Customers ================ -->
                
            </div>
            <button onclick="window.print()">print</button>
        </div>
    </section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section id="5">
            <div id="section1">
                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Less quantity</h2>
                        </div>
                        <table>
                            <thead>
                                <tr>
							<th>product code</th>
							<th>product name</th>
							<th>quaintity</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                <?php
                            $sqli5 = "SELECT * FROM `inventory`";
$result5 = mysqli_query($conn,$sqli5);

while($row = mysqli_fetch_assoc($result5))
{
    if($row['quantity'] <= 20)
    {
		?>
						<tr class="tr">
                                <td class="td"><div class="loader"><?php echo $row['product_code']; ?></div></td>
                                <td class="td"><div class="loader"><?php echo $row['product_name']; ?></div></td>
                                <td class="td"><div class="loader"><?php echo $row['quantity']; ?></div></td>
                            </tr>

<?php
    }
} 
?>
                            
                            </tbody>
                        </table>
                       
                </div>

                <!-- ================= New Customers ================ -->
                
            </div>
            <button onclick="window.print()">print</button>
        </div>
    </section>
</div>
</div>

<section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
    <section><br><br><br><br><br><br><br><br><br><br><br><br></section>
<!-- =========== Scripts =========  -->
    <script>
        let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};

    </script>
    <!-- ====== ionicons ======= -->
</body>

</html>