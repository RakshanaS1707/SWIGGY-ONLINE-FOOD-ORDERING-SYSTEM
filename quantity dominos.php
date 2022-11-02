<html> 
<head>
<title>FOOD ORDER FORM</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<script type="text/javascript" src="d quantity.js">  </script>
 </head>
 <h1>SWIGGY - online food ordering and delivery</h1>
<table style="background-color:aquamarine;margin-left: 100px;">  <tr>
<td>Branch : </td>
<td> 
<select> 
<option>--Select item--</option>
<option>Avinashi</option>
<option>Ganapathy</option>
<option>Peelamedu</option> 
<option>Ramanathapuram</option>
<option>Saravanampatti</option>
<option>Nilambur</option>
<option>Annur</option>
</select>
</td> 
</tr>
<tr>
<td>User name:</td>
<td>
<input type="text" >
</td>
</tr>
<tr><td>Mobile: </td>
<td><input type="text" id="mblenmb"></td></tr> 
</table>
<br>
<form name="tblform" >
<table width="80%"  id="alignment" >
<tr>
<th>Food Item</th>
<th> </th>
<th>Quantity</th>
<th>Price</th> 
</tr>
<tr> 
<td>Item 1:</td> 
<td>
<select id="item1">
<option value="1">--Select item--</option> 
<option value="Veg pizza">Veg pizza</option> 
<option value="Cheese pizza">Cheese pizza</option> 
<option value="Coke">Coke</option> 
<option value="Sprite">Sprite</option> 
<option value="Garlic bread">Garlic bread</option> 
<option value="Potato wedges">Potato wedges</option>  
</select>
</td> 
<td><input type="number" value="0" id="q1"></td>
<td><input type="text" value="100" id="p1"></td>
</tr>   
<tr>
<td>Item 2:</td>
<td>
<select id="item2">
<option value="1">--Select item--</option> 
<option value="Veg pizza">Veg pizza</option> 
<option value="Cheese pizza">Cheese pizza</option> 
<option value="Coke">Coke</option> 
<option value="Sprite">Sprite</option> 
<option value="Garlic bread">Garlic bread</option> 
<option value="Potato wedges">Potato wedges</option>  
</select>
</td>
<td><input  type="number" value="0" id="q2"></td>  
<td><input type="text" value="100" id="p2"></td>  
</tr> 
<tr>
<td>Item 3:</td>
<td><select id="item3">  
<option value="1">--Select item--</option> 
<option value="Veg pizza">Veg pizza</option> 
<option value="Cheese pizza">Cheese pizza</option> 
<option value="Coke">Coke</option> 
<option value="Sprite">Sprite</option> 
<option value="Garlic bread">Garlic bread</option> 
<option value="Potato wedges">Potato wedges</option>   
</select>
</td>
<td><input type="number" value="0" id="q3"></td>
<td><input type="text"  value="100" id="p3"></td> 
</tr> 
<tr>
<td>Item 4:</td>
<td><select id="item4">   
<option value="1">--Select item--</option> 
<option value="Veg pizza">Veg pizza</option> 
<option value="Cheese pizza">Cheese pizza</option> 
<option value="Coke">Coke</option> 
<option value="Sprite">Sprite</option> 
<option value="Garlic bread">Garlic bread</option> 
<option value="Potato wedges">Potato wedges</option>  
</select>
</td>
<td><input type="number" value="0" id="q4"></td>
<td><input type="text"  value="100" id="p4"></td> 
</tr>
<tr>
<td>Item 5:</td>
<td><select id="item5">  
<option value="1">--Select item--</option> 
<option value="Veg pizza">Veg pizza</option> 
<option value="Cheese pizza">Cheese pizza</option> 
<option value="Coke">Coke</option> 
<option value="Sprite">Sprite</option> 
<option value="Garlic bread">Garlic bread</option> 
<option value="Potato wedges">Potato wedges</option>  
</select>
</td>
<td><input type="number" value="0" id="q5"></td>
<td><input type="text" value="100" id="p5"></td> 
</tr>
<tr>
<td>Item 6:</td>
<td><select id="item6"> 
<option value="1">--Select item--</option> 
<option value="Veg pizza">Veg pizza</option> 
<option value="Cheese pizza">Cheese pizza</option> 
<option value="Coke">Coke</option> 
<option value="Sprite">Sprite</option> 
<option value="Garlic bread">Garlic bread</option> 
<option value="Potato wedges">Potato wedges</option>  
</select>
</td>
<td><input type="number" value="0" id="q6"></td>
<td><input type="text"  value="100" id="p6"></td> 
</tr>    
<tr>
<td></td> 
<td></td> 
<td><input type="submit" class="button" value="Create Bill" onclick="window.print(createBill())"></td>
<td><input type="reset" class="button" value="Clear"></td>
</tr>
</table>
</form>
</html >