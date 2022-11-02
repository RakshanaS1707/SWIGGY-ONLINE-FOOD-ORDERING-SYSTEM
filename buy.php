<html>
    <head>
        <title>order</title>
        <script>
            function net()
            {
            var price=0
            var amt=100
            var quant=document.getElementById("input1").value;
            quat=parseInt(quant);
            price=quant*amt;
            document.writeln("The final price is:&nbsp;"+price);
            document.writeln("<br><br>Your order is successfull"); 
            document.writeln("<br><br>THANKYOU FOR ORDERING PLEASE DO TRY AGAIN IF SATISFIED WITH OUR SERVICE");
            }
        </script>
        </head>
        <body bgcolor="lavenderblush">
            <pre>
                ENTER QUANTITY:<input type="text" id="input1" required pattern="[0-9]+"><br>
                <select>
                <option value="1">--Select item--</option> 
                <option value="Titanic boat">Titanic boat</option> 
                <option value="Brownie">Brownie</option> 
                <option value="Banana split">Banana split</option> 
                <option value="Fruit and nut">Fruit and nut</option> 
                <option value="Butterscoth caramel">Butterscoth caramel</option> 
                <option value="Strawberry honey walnut">Strawberry honey Walnut</option> 
                <option value="Oreo choco and cream">Oreo choco and cake</option> 
                </select>
                <input type="button" id="pdt" value="order" onclick="window.print(net())">           
             </pre>
    </body></span>
</html>