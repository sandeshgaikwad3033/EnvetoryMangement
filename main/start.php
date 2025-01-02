<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
    <link rel = "stylesheet" type="text/css" href="http://localhost/project/css/style1.css">
    </head>
    <body>
    
        <div class="wrapper">
                <form action="login.php" method="post">
                   
                    <div class="input-box">
                        <input type="text" name="ID" required>
                        <label><b>AdminID</b></label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="pass" required>
                        <label><b>Password</b></label>
                    </div>
                    <button type="submit" class="btn">login</button>
                </form>
                <?php
                if(isset($_SESSION['status']))
            {
                echo "<script>alert('password is not match');</script>";
                unset($_SESSION['status']);
            }
            ?>
            </div>
    </body>
</html> 