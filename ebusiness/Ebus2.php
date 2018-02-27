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
                 </ul>
        
        </div>
        
       
        <h1>Please enter your payment details</h1>
        </br>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="username" class="labelname">
                Name:
                <input type="name" id="username" name="username" placeholder="Enter Your Name">
            </label>
            </br>
            </br>
            
            <label for="email" class="email">
                Email address:
                <input type="email" id="useremail" name="useremail" placeholder="example@gmail.com">
            </label>
            </br>
            </br>

            <label for="userpin" class="lblpin">
                PIN:
                <input type="pin" id="pin" name="pin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
                <br>
                (Only numbers are allowed for the PIN)
            </label>
            
            </br>
            </br>
            
            <button class="btncontinue" type="submit" id="continue" disabled>Continue</button>
        </form>
        
        <br>
        
        <button class="validate" onClick="validateName()">Validate</button>
    
                
    </body>
</html>