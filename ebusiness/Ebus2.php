<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8"/>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
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
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="payment">
        <h1>Please enter your payment details</h1>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="username" >
                Name:
                <input type="name" id="username" name="username" placeholder="Enter Your Name">
            </label>
            
            <br>
            
            <label for="useremail">
                Email:
                <input type="email" id="useremail" name="useremail" placeholder="example@gmail.com">
            </label>
            
            <br>

            <label for="userpin" >
                PIN:
                <input type="pin" id="userpin" name="userpin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
                <br>
                (Only numbers are allowed for the PIN)
            </label>
            
            <br>
            <br>
            
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        <br>
        
        <button  onClick="validateName()">Validate</button>
    
        <?php  
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
          
        ?>
        </div>
    </body>
</html>