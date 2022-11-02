<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Payment Form</title>
        <link rel="stylesheet" href="pstyles.css">
    </head>
    <body>
	<center>
    <div class="container">
        <h1>Confirm Your Payment</h1>
        <br>
        <div class="first-row">
            <div class="owner">
                <table>
                    <tr>
                        <td>
                            <h3>Card HolderName</h3>
                            
                        </td>
                        <td>
                            <input type="text">  
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <h3>CVV</h3>
                    </td>
                    <td>
                        <input type="password">
                    </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Card Number</h3>
                        </td>
                        <td>
                            <input type="text">
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <h3>Exp :Month/Year</h3>
                        </td>
                        <td>
                           <input id=exp name=exp>
                        </td>

                    </tr>
                    <tr><td>*</td></tr>
                    <tr>
                            <td>
                
                            <a href="feedback.php"><button>Confirm</button></a>
                            </td>
                            <td>
                                <a href="payment.php"><button>Cancel</button></a>
                            </td>
                            <td>
                                <a href="payment.php"><input type="submit" class="button" value="Reset" onclick=Reset()></a>
                            </td>
                    </tr>
                
                    
                    
                </table>

            
            
    
    </body>
</html>