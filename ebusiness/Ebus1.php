<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8"/>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

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
        
        <p><img class="nimbus" src="http://www.nimbusnetworks.com/wp-content/uploads/2016/09/logo.png" alt="Nimbus" style="width:250px;height:50px;margin-left:0%;"></p>
        
       
          <h1>Select a Product</h1>
              
          <br>
              
          <form method="POST" action="Ebus2.php">
            
           <div class="products">
           
            <label for="salesforce" >
              <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
              SalesForce @ $100
            </label>
                
            <br>
            
            <label for="cloud9" class="lblcloud9">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               Cloud9 @ $200
            </label>
                
            <br>
                
            <label for="aws" >
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
              AWS @ $300
            </label>
                
            <br>
                
            <label for="gmail" >
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
              Gmail @ $400
            </label>
            
            <br>
            <br>
            
            <label for="subtotal">
              Subtotal: 
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="discount" >
              Discount @ 5%: <input type="text" id="discount" name="discount" value="0.00" readonly/>
              
              <br>
              
            </label>
                
           
            
            <label for="vat" class="lblvat">
              VAT @ 10%: 
              <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
                
            <br>
            <br>
                
            <label for="total">
              Total: 
              <input type="text" id="total" name="total" value="0.00" readonly/>
              <br>
            </label>
      </div>
            <br>
            
            <div class="btnadd">   
              <button class="addbtnstyle" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </div>  
              
          </form>
             
          <button class="btncal" onClick="calcSub()">Calculate Cost</button>
             
          <br>
            
         
          <a class="btnclear" role="button" href="Ebus1.php">Clear Choice</a>
  
    </body>
</html>