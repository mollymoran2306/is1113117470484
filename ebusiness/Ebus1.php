<!DOCTYPE html>
<html>
    <head>
         <link rel = "stylesheet" href="../mystylesheet2.css" type="text/css" />
        <title> Select Product </title>
       <!--jQuery-->
       <script src = "https://ajax.googleapis.com/ajax/libs/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    <body>
        
        
        <div>
             
                 <ul>
                       <li> <a  href = "../CV/CV_Page1.html">Curriculum Vitae</a></li>
                       <li> <a href = "../Interests/sports.html">My Interests</a></li>
                       <li> <a href = "../ebusiness/Ebus1.php">Ebus</a></li> 
                        <li> <a href = "../CloudServices/about_cloud.html">Cloud Services</a> </li>
                 </ul>
        
        </div>
        </br>
        </br>
        </br>
        </br>
        </br>
            <h1>Select a Product</h1>
            
            <br/>
            
            <form method ="POST" action="Ebus2.php">
                
                <label for="salesforce">
                    <input type = "radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                    SalesForce @ $100
                </label>
                
                <br/>
                
                <label for="aws">
                    <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                    SalesForce @ $300
                </label>
                
                <br/>
                
                <br/>
                
                <label for="subtotal">
                    Sub Total
                    <input type="text" id="total" value ="0.00" readonly/>
                </label>
                <br/>
                <label for="total">
                    Total
                    <input type="text" id="total" value ="0.00" readonly/>
                </label>
                
                <br/>
                
                <button type="submit" id="btnProceed" disabled> Add to Shopping Cart</button>
                    
            </form>
                    
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
        
    </body>
</html>
