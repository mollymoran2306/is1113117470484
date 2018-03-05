<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <link rel="stylesheet" href="../ebusstylesheet.css" type="text/css"/>
    </head>
    
    <body>
        
         <div>
             
                 <ul>
                       <li> <a  href = "../ebusiness/Ebus1.php">Shop</a></li>
                     
                       
                        <li> <a href = "../CloudServices/about_cloud.html">About Cloud</a> </li>
                        <li> <a href = "../CloudServices/nimbuscloudservices.html">Home</a></li>
                 </ul>
        
        </div>
        
       
        <h1>Please enter your payment details</h1>
        </br>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="username" class="lblname">
                Name
                <input type="name" id="username" name="username" placeholder="Enter Your Name">
            </label>
            
            <br>
            
            <label for="useremail" class="lblemail">
                Email address
                <input type="email" id="useremail" name="useremail" placeholder="example@gmail.com">
            </label>
            
            <br>

            <label for="userpin" class="lblpin">
                PIN
                <input type="pin" id="userpin" name="userpin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
                <br>
                (Only numbers are allowed for the PIN)
            </label>
            
            <br>
            <br>
            
            <button class="btnproceed" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        <br>
        
        <button class="btnvalidate" onClick="validateName()">Validate</button>
    
        <?php  
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
          
        ?>
        
    </body>
</html>