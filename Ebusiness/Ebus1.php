<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="shop.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body id="purchase">
        
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                salesforce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                aws @ $300
              </label>
              
              <br/>
              
                <label for="Cloud9">
                <input type="radio" id="Cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud9 @ $200
              </label>
              
              <br/>
              
                <label for="Gmail">
                <input type="radio" id="Gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
             </br>
             </br>
              
              <label for="SubTotal">
                Sub Total
                <input type="text" id="SubTotal" value="0.00" readonly/>
              </label>
              
              <br/>
              <br/>
              
              <label for="Discount">
                Discount(10%)
                <input type="text" id="Discount" value="0.00" readonly/>
              </label>
              
               <br/>
              <br/>
              
                <label for="VAT">
                VAT(10%)
                <input type="text" id="VAT" value="0.00" readonly/>
              </label>
              
                <br/>
              <br/>
              
              
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button id="calculate" onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
            
             <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
             $_SESSION["user_email"] = $_POST["user_email"];
              $_SESSION["user_name"] = $_POST["user_name"];
            ?>
    
    </body>
</html>