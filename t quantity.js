function createBill(){
var index=0;
var items = ["null", "null", "null","null"];
var quantities = ["null", "null", "null","null"];
var prices = ["null", "null", "null","null"];
						
						
						
var e1 = document.getElementById("item1");
var itemselected1 = e1.options[e1.selectedIndex].value;
if(itemselected1!="1"){
items[index]=itemselected1;
quantities[index] = document.getElementById("q1").value;
prices[index] = document.getElementById("p1").value;
index++;
}
			

var e2 = document.getElementById("item2");
var itemselected2 = e2.options[e2.selectedIndex].value;
if(itemselected2!="1"){
items[index]=itemselected2;
quantities[index] = document.getElementById("q2").value;
prices[index] = document.getElementById("p2").value;
index++;
}

var e3 = document.getElementById("item3");
var itemselected3 = e3.options[e3.selectedIndex].value;
if(itemselected3!="1"){
items[index]=itemselected3;
quantities[index] = document.getElementById("q3").value;
prices[index] = document.getElementById("p3").value;
index++;
}

var e4 = document.getElementById("item4");
itemselected4 = e4.options[e4.selectedIndex].value;
if(itemselected4!="1"){
items[index]=itemselected4;
quantities[index] = document.getElementById("q4").value;
prices[index] = document.getElementById("p4").value;
index++;
}
var e5 = document.getElementById("item5");
itemselected5 = e5.options[e5.selectedIndex].value;
if(itemselected5!="1"){
items[index]=itemselected5;
quantities[index] = document.getElementById("q5").value;
prices[index] = document.getElementById("p5").value;
index++;
}
var e6 = document.getElementById("item6");
itemselected6 = e6.options[e6.selectedIndex].value;
if(itemselected6!="1"){
items[index]=itemselected6;
quantities[index] = document.getElementById("q6").value;
prices[index] = document.getElementById("p6").value;
index++;
}
var e7 = document.getElementById("item7");
itemselected7 = e7.options[e7.selectedIndex].value;
if(itemselected7!="1"){
items[index]=itemselected7;
quantities[index] = document.getElementById("q7").value;
prices[index] = document.getElementById("p7").value;
index++;
}
var e8 = document.getElementById("item8");
itemselected8 = e8.options[e8.selectedIndex].value;
if(itemselected8!="1"){
items[index]=itemselected8;
quantities[index] = document.getElementById("q8").value;
prices[index] = document.getElementById("p8").value;
index++;
}
var e9 = document.getElementById("item9");
itemselected9 = e9.options[e9.selectedIndex].value;
if(itemselected9!="1"){
items[index]=itemselected9;
quantities[index] = document.getElementById("q9").value;
prices[index] = document.getElementById("p9").value;
index++;
}
var e10 = document.getElementById("item10");
itemselected10 = e10.options[e10.selectedIndex].value;
if(itemselected10!="1"){
items[index]=itemselected10;
quantities[index] = document.getElementById("q10").value;
prices[index] = document.getElementById("p10").value;
index++;
}
var e11 = document.getElementById("item11");
itemselected11 = e11.options[e11.selectedIndex].value;
if(itemselected11!="1"){
items[index]=itemselected11;
quantities[index] = document.getElementById("q11").value;
prices[index] = document.getElementById("p11").value;
index++;
}
var e12 = document.getElementById("item12");
itemselected12 = e12.options[e12.selectedIndex].value;
if(itemselected12!="1"){
items[index]=itemselected12;
quantities[index] = document.getElementById("q12").value;
prices[index] = document.getElementById("p12").value;
index++;
}
var e13 = document.getElementById("item13");
itemselected13 = e13.options[e13.selectedIndex].value;
if(itemselected13!="1"){
items[index]=itemselected13;
quantities[index] = document.getElementById("q13").value;
prices[index] = document.getElementById("p13").value;
index++;
}
var e14 = document.getElementById("item14");
itemselected7 = e14.options[e14.selectedIndex].value;
if(itemselected7!="1"){
items[index]=itemselected14;
quantities[index] = document.getElementById("q14").value;
prices[index] = document.getElementById("p14").value;
index++;
}
var e15 = document.getElementById("item15");
itemselected15 = e15.options[e15.selectedIndex].value;
if(itemselected7!="1"){
items[index]=itemselected15;
quantities[index] = document.getElementById("q15").value;
prices[index] = document.getElementById("p15").value;
index++;
}
var e16 = document.getElementById("item16");
itemselected16 = e16.options[e16.selectedIndex].value;
if(itemselected16!="1"){
items[index]=itemselected16;
quantities[index] = document.getElementById("q16").value;
prices[index] = document.getElementById("p16").value;
index++;
}
var e17 = document.getElementById("item17");
itemselected17 = e17.options[e17.selectedIndex].value;
if(itemselected17!="1"){
items[index]=itemselected17;
quantities[index] = document.getElementById("q17").value;
prices[index] = document.getElementById("p17").value;
index++;
}
var e18 = document.getElementById("item18");
itemselected18 = e18.options[e18.selectedIndex].value;
if(itemselected18!="1"){
items[index]=itemselected18;
quantities[index] = document.getElementById("q18").value;
prices[index] = document.getElementById("p18").value;
index++;
}
var e19 = document.getElementById("item19");
itemselected19 = e19.options[e19.selectedIndex].value;
if(itemselected19!="1"){
items[index]=itemselected19;
quantities[index] = document.getElementById("q19").value;
prices[index] = document.getElementById("p19").value;
index++;
}
var e20 = document.getElementById("item20");
itemselected20 = e20.options[e20.selectedIndex].value;
if(itemselected20!="1"){
items[index]=itemselected20;
quantities[index] = document.getElementById("q20").value;
prices[index] = document.getElementById("p20").value;
index++;
}
var e21 = document.getElementById("item21");
itemselected21 = e21.options[e21.selectedIndex].value;
if(itemselected21!="1"){
items[index]=itemselected21;
quantities[index] = document.getElementById("q21").value;
prices[index] = document.getElementById("p21").value;
index++;
}
var fTot=0;
for(var i=0;i<index;i++){
document.write("<tr>");
createtbl(items[i]);
createtbl(quantities[i]);
createtbl(prices[i]);
var tot=parseInt(quantities[i])*parseInt(prices[i]);
document.write("<td>"+tot+"</td>");
fTot+=tot;
document.write("</tr>");
}
document.write("<tr><td colspan=\"3\"><strong>TOTAL</strong></td><td>"+fTot+"</td><tr>");	
}
if(n==1){
document.writeln("<h1 style=\"text-align:center;\">The Bill</h1>");
document.writeln("<table width=\"90%\" border=\"1\">");
document.writeln("<tr><th>ITEMS</th><th>QUANTITY</th><th>PRICE</th><th></th></tr>");
}
else
document.write("</table>");


