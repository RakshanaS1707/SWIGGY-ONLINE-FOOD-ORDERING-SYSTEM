<html> 
<head>
<title>FOOD ORDER FORM</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<script type="text/javascript" src="a quantity.js">  </script>
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
<input type="text" required pattern="[A-Za-z]+">
</td>
</tr>
<tr><td>Mobile: </td>
<td><input type="text" id="mblenmb" required pattern="[789][0-9]+"></td></tr> 
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
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
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
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input  type="number" value="0" id="q2"></td>  
<td><input type="text"  value="100" id="p2"></td>  
</tr> 
<tr>
<td>Item 3:</td>
<td><select id="item3">
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q3"></td>
<td><input type="text"  value="100" id="p3"></td> 
</tr> 
<tr>
<td>Item 4:</td>
<td><select id="item4">   
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q4"></td>
<td><input type="text"  value="100" id="p4"></td> 
</tr>
<tr>
<td>Item 5:</td>
<td><select id="item5">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q5"></td>
<td><input type="text"  value="100" id="p5"></td> 
</tr>
<tr>
<td>Item 6:</td>
<td><select id="item6"> 
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q6"></td>
<td><input type="text"  value="100"id="p6"></td> 
</tr>
<tr>
<td>Item 7:</td>
<td><select id="item7">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q7"></td>
<td><input type="text"  value="100"id="p7"></td> 
</tr>    
<tr>
<td>Item 8:</td>
<td><select id="item8">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q8"></td>
<td><input type="text"  value="100"id="p8"></td> 
</tr>    
<tr>
<td>Item 9:</td>
<td><select id="item9">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q9"></td>
<td><input type="text"  value="100"id="p9"></td> 
</tr>    
<tr>
<td>Item 10:</td>
<td><select id="item10">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q10"></td>
<td><input type="text"  value="100"id="p10"></td> 
</tr>    
<tr>
<td>Item 11:</td>
<td><select id="item11">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q11"></td>
<td><input type="text"  value="100"id="p11"></td> 
</tr>    
<tr>
<td>Item 12:</td>
<td><select id="item12">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q12"></td>
<td><input type="text"  value="100"id="p12"></td> 
</tr>    
<tr>
<td>Item 13:</td>
<td><select id="item13">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q13"></td>
<td><input type="text"  value="100"id="p13"></td> 
</tr>    
<tr>
<td>Item 14:</td>
<td><select id="item14">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q14"></td>
<td><input type="text"  value="100"id="p14"></td> 
</tr>    
<tr>
<td>Item 15:</td>
<td><select id="item15">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q15"></td>
<td><input type="text"  value="100"id="p15"></td> 
</tr>    
<tr>
<td>Item 16:</td>
<td><select id="item16">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q16"></td>
<td><input type="text"  value="100"id="p16"></td> 
</tr>    
<tr>
<td>Item 17:</td>
<td><select id="item17">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q17"></td>
<td><input type="text"  value="100"id="p17"></td> 
</tr>    
<tr>
<td>Item 18:</td>
<td><select id="item18">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q18"></td>
<td><input type="text"  value="100"id="p18"></td> 
</tr>    
<tr>
<td>Item 19:</td>
<td><select id="item19">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q19"></td>
<td><input type="text"  value="100"id="p19"></td> 
</tr>    
<tr>
<td>Item 20:</td>
<td><select id="item20">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q20"></td>
<td><input type="text"  value="100"id="p20"></td> 
</tr>    
<tr>
<td>Item 21:</td>
<td><select id="item21">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q21"></td>
<td><input type="text"  value="100"id="p21"></td> 
</tr>    
<tr>
<td>Item 22:</td>
<td><select id="item22">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q22"></td>
<td><input type="text"  value="100"id="p22"></td> 
</tr>    
<tr>
<td>Item 23:</td>
<td><select id="item23">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q23"></td>
<td><input type="text"  value="100"id="p23"></td> 
</tr>    
<tr>
<td>Item 24:</td>
<td><select id="item24">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q24"></td>
<td><input type="text"  value="100"id="p24"></td> 
</tr>    
<tr>
<td>Item 25:</td>
<td><select id="item25">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q25"></td>
<td><input type="text"  value="100"id="p25"></td> 
</tr>    
<tr>
<td>Item 26:</td>
<td><select id="item26">  
<option value="1">--Select item--</option> 
<option value="Plain roast">Plain roast</option> 
<option value="Masal roast">Masal roast</option> 
<option value="Onion uthapam">Onion uthapam</option> 
<option value="Idly">Idly</option> 
<option value="Poori">Poori</option> 
<option value="Ven pongal">Ven pongal</option> 
<option value="Chappathi">Chappathi</option>
<option value="Kichadi">Kichadi</option> 
<option value="Upma">Upma</option> 
<option value="Full meals">Full meals</option> 
<option value="Curd rice">Curd rice</option> 
<option value="Tomato rice">Tomato rice</option> 
<option value="Lemon rice">Lemon rice</option> 
<option value="Veg biriyani">Veg biriyani</option>
<option value="Mushroom biriyani">Mushroom biriyani</option> 
<option value="Califlower biriyani">Califlower biriyani</option> 
<option value="Califlower chilly">Califlower chilly</option> 
<option value="Mushroom chilly">Mushroom chilly</option> 
<option value="Parotta">Parotta</option> 
<option value="Chilly parotta">Chilly parotta</option> 
<option value="Kothu parotta">Kothu parotta</option> 
<option value="Rumali rotti">Rumali rotti</option>
<option value="Butter naan">Butter naan</option>
<option value="Veg noodles">Veg noodles</option>
<option value="Egg noodles">Egg noodles</option>
<option value="Omlet">Omlet</option>
</select>
</td>
<td><input type="number" value="0" id="q26"></td>
<td><input type="text"  value="100"id="p26"></td> 
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