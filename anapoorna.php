<html>
<head>
<title>MENU</title>
</head>
<body>
<body background="https://ipack.info/wp-content/uploads/2015/11/Blinked-snow-on-black-background.jpg"style="background-repeat:no-repeat; background-position:center;background-size:cover;color:white"><center>
<table border="1"><tr>
    
       
        <img src="http://www.nainaskitchen.com.au/uploads/8/7/8/2/87828110/8_orig.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0e/6f/8d/cf/veg-meals.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        <img src="https://www.outlookindia.com/outlooktraveller/public/uploads/articles/explore/malabar_parotta.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    
        <img src="https://www.indianhealthyrecipes.com/wp-content/uploads/2016/06/masala-dosa-1.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        <img src="https://www.vegrecipesofindia.com/wp-content/uploads/2016/07/curd-rice-2.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        <img src="http://lh6.ggpht.com/-QnY7gTaN8pI/UFIrrP_7O_I/AAAAAAAADmI/TL4veJaltpc/Chilli%252520Parotta%252520-%252520IMG_1737_thumb%25255B5%25255D.jpg?imgmax=800"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="https://4.bp.blogspot.com/-LjOW42OUvWc/Wo_7biGkv8I/AAAAAAAAwiA/v7oVa7aMDZkqlLjsoq41YcP-94v0aOtpQCLcBGAs/s1600/onion-uthappam.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        <img src="https://static.toiimg.com/thumb/54673775.cms?width=1200&height=900"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
        <img src="https://www.licious.in/blog/wp-content/uploads/2020/06/KUTTU-PORATTA.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    
        <img src="https://www.kannammacooks.com/wp-content/uploads/soft-idli-batter-recipe-using-idli-rava-mixie-blender-method.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
        <img src="https://static.toiimg.com/thumb/53870704.cms?width=1200&height=900"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<
        <img src="https://i.pinimg.com/originals/7a/1c/b7/7a1cb79f05e1b0588a807a9ad4f5eeff.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
	    
        <img src="https://ministryofcurry.com/wp-content/uploads/2020/03/puri-7.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
        <img src="https://i1.wp.com/www.jeyashriskitchen.com/wp-content/uploads/2016/01/hyderabadi-dum-biryani.jpg?fit=800%2C534&ssl=1"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</tr>
<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"display");
$query = "SELECT * FROM product1";
$result=mysqli_query($connecto,$query);
$i=0;
?>
<table border="5" width="900" height="50px" >
<tr bgcolor="" height="50">
<th>BREAKFAST</th>
<th>PRICE</th>
<th>LUNCH</th>
<th>PRICE</th>
<th>DINNER</th>
<th>PRICE</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{    
$a[$i]=$row["breakfast"];
$b[$i]=$row["bprice"];
$c[$i]=$row["lunch"];
$d[$i]=$row["lprice"];
$e[$i]=$row["dinner"];
$f[$i]=$row["dprice"];
print("<tr><th><h2>$a[$i]</th>");
print("<th><h2>$b[$i]</th>");
print("<th><h2>$c[$i]</th>");
print("<th><h2>$d[$i]</th>");
print("<th><h2>$e[$i]</th>");
print("<th><h2>$f[$i]</th><tr>");
print("<br>");
$i=$i+1;
}
?><table border="1"><tr>
<img src="https://previews.123rf.com/images/gunshe/gunshe1810/gunshe181000012/111113988-north-indian-butter-paneer-butter-masala-with-butter-naan.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    
        <img src="https://www.vegrecipesofindia.com/wp-content/uploads/2019/01/ven-pongal-recipe-1a.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
        <img src="https://www.recipehub.in/wp-content/uploads/2020/01/mushroom-biryaniwebsite.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
        <img src="https://thumbs.dreamstime.com/b/indian-street-foods-chapatti-curries-homemade-delicious-vegetarian-meal-whole-wheat-chapathi-served-tasty-mixed-vegetable-210739828.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   

        <img src="https://thumbs.dreamstime.com/b/indian-street-foods-chapatti-curries-homemade-delicious-vegetarian-meal-whole-wheat-chapathi-served-tasty-mixed-vegetable-210739828.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
        <img src="https://simply-delicious-food.com/wp-content/uploads/2019/07/Cauliflower-biryani-5.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
        <img src="https://www.mygingergarlickitchen.com/wp-content/rich-markup-images/1x1/1x1-veg-schezwan-noodles-recipe-video-how-to-make-easy-veg-schezwan-noodles.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
	    
        <img src="https://www.vegrecipesofindia.com/wp-content/uploads/2017/03/rava-kichadi-recipe-1a.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
        <img src="https://www.mealdial.com/wp-content/uploads/2016/12/Chilli-Gobi.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
        <img src="https://static.toiimg.com/photo/52467119.cms"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    
        <img src="https://cdn1.foodviva.com/static-content/food-images/breakfast-recipes/upma-recipe/upma-recipe.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
        <img src="https://www.sailusfood.com/wp-content/uploads/2016/02/how-to-make-chilli-mushroom.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
        <img src="https://st.depositphotos.com/1889887/3955/i/600/depositphotos_39556495-stock-photo-omelet-with-vegetables-and-cheese.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</tr><table><br><br><br>
<br><br><button type="button"><a href="frames2.html" target="frames2">BACK</a></button>
<tr><button type="button"><a href="quantity anapoorna.php" target="frames2">ORDER</a></button></tr>
</body>
</html>