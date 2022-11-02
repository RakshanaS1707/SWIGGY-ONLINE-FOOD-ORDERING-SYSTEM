<html>
    <head>
        <title>feedback form</title>
        <link rel= 'stylesheet' href='feedback.css' type='text/css'>
        <form  name="feedback" action="feedDB.php">
    </head>
    <body>
        <center>
        <H3>NAME:</H3><input type="text"  name="a" required pattern="[A-Za-z]+"></input><br><br><br>
        <H3>EMAIL ID:</H3><input type="text"  name="b" required ></input><br><br><br>
        <h3>FEEDBACK:</h3><input type="text" name="c" required></input><br><br><br>
        <input type="submit" value="SUBMIT" onclick="thankyou.php">
        </center>
    </form>
    </body>
</html>