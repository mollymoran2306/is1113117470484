<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <link rel="stylesheet" href="../ebusstylesheet.css" type="text/css"/>
        
        
        <link rel="icon" type="image/png" href="https://cdn1.iconfinder.com/data/icons/hawcons/32/699966-icon-1-cloud-256.png">
        
    </head>
    
    <body>
          <div>
             
                 <ul>
                       <li> <a  href = "../ebusiness/Ebus1.php">Shop</a></li>
                        <li> <a href = "../CloudServices/about_cloud.html">About Cloud</a> </li>
                         <li> <a href = "../CloudServices/nimbuscloudservices.html">Home</a> </li>
                 </ul>
        
        </div>
        
           <h1>Purchase Receipt</h1>
        
        <?php  
        // Set session variables
          $_SESSION["username"] = $_POST["username"];
          $_SESSION["useremail"] = $_POST["useremail"];
        ?>
        
        <p>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["username"] . ".";
            ?>
        </p>
        
        <p>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["useremail"] . ".";
            ?>
        </p>
        
        <p>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Total: " . $_SESSION["total"] . ".";
            ?>
        </p>
    </body>
</html>