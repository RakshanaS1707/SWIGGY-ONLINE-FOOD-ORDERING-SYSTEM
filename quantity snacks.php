<html> 
<head>
<title>FOOD ORDER FORM</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<script type="text/javascript" src="bs quantity.js">  </script>
 </head>
 <h1>SWIGGY - online food ordering and delivery</h1>
<table style="background-color:aquamarine;margin-left: 100px;">  <tr>
<td>Branch : </td>
<td> 
<select> 
<option>--Select item--</option>
<option>Gandhipuram</option>
<option>RS puram</option>
<option>Peelamedu</option> 
<option>Ramanathapuram</option>
<option>Saravanampatti</option>
<option>Nilambur</option>
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
<td><input type="text" id="num"></td></tr> 
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
<option value="Cutlet">Cutlet</option> 
<option value="Bhel puri">Bhel puri</option> 
<option value="Pani puri">Pani puri</option> 
<option value="Dalgona coffee">Dalgona coffee</option> 
<option value="Malai kulfi">Malai kulfi</option> 
<option value="Coffee">Coffee</option> 
<option value="Falooda">Falooda</option> 
</select>
</td> 
<td><input type="number"  value="0" id="q1"></td>
<td><input type="text" value="100" id="p1"></td>
</tr>   
<tr>
<td>Item 2:</td>
<td>
<select id="item2">
<option value="1">--Select item--</option>  
<option value="Cutlet">Cutlet</option> 
<option value="Bhel puri">Bhel puri</option> 
<option value="Pani puri">Pani puri</option> 
<option value="Dalgona coffee">Dalgona coffee</option> 
<option value="Malai kulfi">Malai kulfi</option> 
<option value="Coffee">Coffee</option> 
<option value="Falooda">Falooda</option> 
</select>
</td>
<td><input  type="number" value="0" id="q2"></td>  
<td><input type="text" value="100" id="p2"></td>  
</tr> 
<tr>
<td>Item 3:</td>
<td><select id="item3">
<option value="1">--Select item--</option>   
<option value="Cutlet">Cutlet</option> 
<option value="Bhel puri">Bhel puri</option> 
<option value="Pani puri">Pani puri</option> 
<option value="Dalgona coffee">Dalgona coffee</option> 
<option value="Malai kulfi">Malai kulfi</option> 
<option value="Coffee">Coffee</option> 
<option value="Falooda">Falooda</option> 
</select>
</td>
<td><input type="number" value="0" id="q3"></td>
<td><input type="text"  value="100" id="p3"></td> 
</tr> 
<tr>
<td>Item 4:</td>
<td><select id="item4">   
<option value="1">--Select item--</option> 
<option value="Cutlet">Cutlet</option> 
<option value="Bhel puri">Bhel puri</option> 
<option value="Pani puri">Pani puri</option> 
<option value="Dalgona coffee">Dalgona coffee</option> 
<option value="Malai kulfi">Malai kulfi</option> 
<option value="Coffee">Coffee</option> 
<option value="Falooda">Falooda</option>  
</select>
</td>
<td><input type="number" value="0" id="q4"></td>
<td><input type="text"  value="100" id="p4"></td> 
</tr>
<tr>
<td>Item 5:</td>
<td><select id="item5">  
<option value="1">--Select item--</option> 
<option value="Cutlet">Cutlet</option> 
<option value="Bhel puri">Bhel puri</option> 
<option value="Pani puri">Pani puri</option> 
<option value="Dalgona coffee">Dalgona coffee</option> 
<option value="Malai kulfi">Malai kulfi</option> 
<option value="Coffee">Coffee</option> 
<option value="Falooda">Falooda</option> 
</select>
</td>
<td><input type="number" value="0" id="q5"></td>
<td><input type="text" value="100" id="p5"></td> 
</tr>
<tr>
<td>Item 6:</td>
<td><select id="item6"> 
<option value="1">--Select item--</option>  
<option value="Cutlet">Cutlet</option> 
<option value="Bhel puri">Bhel puri</option> 
<option value="Pani puri">Pani puri</option> 
<option value="Dalgona coffee">Dalgona coffee</option> 
<option value="Malai kulfi">Malai kulfi</option> 
<option value="Coffee">Coffee</option> 
<option value="Falooda">Falooda</option> 
</select>
</td>
<td><input type="number" value="0" id="q6"></td>
<td><input type="text"  value="100" id="p6"></td> 
</tr>
<tr>
<td>Item 7:</td>
<td><select id="item7">  
<option value="1">--Select item--</option> 
<option value="Cutlet">Cutlet</option> 
<option value="Bhel puri">Bhel puri</option> 
<option value="Pani puri">Pani puri</option> 
<option value="Dalgona coffee">Dalgona coffee</option> 
<option value="Malai kulfi">Malai kulfi</option> 
<option value="Coffee">Coffee</option> 
<option value="Falooda">Falooda</option> 
</select>
</td>
<td><input type="number" value="0" id="q7"></td>
<td><input type="text" value="100" id="p7"></td> 
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