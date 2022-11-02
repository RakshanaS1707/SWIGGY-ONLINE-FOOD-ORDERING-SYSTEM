<html>
<head>
<title>product</title>
</head>
<body background="https://pbs.twimg.com/profile_images/1093450686199619584/hmdwk-Ds.jpg" style="background-repeat:no-repeat; background-position:center;background-size:cover;color:white"><center>
<table border="1"><tr>
<img src="https://i.ytimg.com/vi/WkRvdgpTGho/maxresdefault.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__52705__RecipeDetailsLightBox/brownie-with-vanilla-ice-cream.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://www.thespruceeats.com/thmb/NajuxdHEVZFu0SLCjzJv5R0Xj2o=/2048x1365/filters:fill(auto,1)/perfect-banana-split-recipe-305712-13_preview-5b2bd062ba61770054b59b85.jpeg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://mayuris-jikoni.com/wp-content/uploads/2020/08/knickerbocker-glory-3.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://gbc-cdn-public-media.azureedge.net/img65625.768x512.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://res.cloudinary.com/swiggy/image/upload/f_auto,q_auto,fl_lossy/ow0evffncsunmm21iijg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://bakingmischief.com/wp-content/uploads/2020/03/baileys-cookies-and-cream-milkshake-photo.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</tr>
<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"display");
$query = "SELECT * FROM product";
$result=mysqli_query($connecto,$query);
$i=0;
?>
<table border="5" width="900" height="50px" >
<tr bgcolor="" height="50">
<th>PRODUCT NAME</th>
<th>PRICE</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{    
$a[$i]=$row["name"];
$b[$i]=$row["price"];
print("<tr><th><h2>$a[$i]</th>");
print("<th><h2>$b[$i]</th></tr>");
print("<br>");
$i=$i+1;
}
?><table><br><br><br>
<tr><button type="button"><a href="quantity boomerang.php" target="frames2">ORDER</a></button></tr>
</body>
</html>