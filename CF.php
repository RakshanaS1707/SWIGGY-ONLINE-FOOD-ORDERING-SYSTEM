<link rel= 'stylesheet' href='login.css' type='text/css'>
  <script>
      function login()
	{
		var email = document.getElementById("email").value;
		var uname = document.getElementById("uname").value;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(email =='')
		{
			alert("please enter user name.");
		}
        else if(!filter.test(email))
		{
			alert("Enter valid email id.");
		}
		else if(uname=='')
		{
        	alert("enter the user name");
		}
		
		else if(uname.length<3)
		{
			alert("User name min  length is 3.");
		}
		else
		{
            alert('YOU HAVE SUCCESSFULLY LOGGED IN');
			}
	}
	//Reset Inputfield code.
	function clearFunc()
	{
		document.getElementById("email").value="";
		document.getElementById("uname").value="";
	}	
  </script>
  </head>
     <body>
	<!-- Main div code -->
	<div id="main">
	<div class="h-tag">
	<h2>Welcome To My Account Login</h2>
    <form class="login" name="form1"  action="loginDB.php">
	</div>
	<!-- Login box -->
	<div class="login">
	<table cellspacing="2" align="center" cellpadding="8" border="0">
	<tr>
	<td><h2>Enter User Name :</h2></td>
	<td><input type="text" placeholder="Enter user name here" id="uname" name="uname"class="tb"  /></td>
	</tr>
	<tr>
	<td><h2>Enter Email id :</h2></td>
	<td><input type="text" placeholder="Enter Email id here" id="email" name="email" class="tb" /></td>
	</tr>
	<tr>
	<td></td>
	<td>
	<input type="submit" value="Reset" onclick="clearFunc()" class="btn" />
	<input type="submit" value="Login" class="btn" onClick="login()" />
    <br><center><button type="button"><a href="front.php">BACK</a></button></center>
    </td>
	</tr>
	</table>
	</div>
  	 <!-- login box div ending here.. -->
	</div>
	<!-- Main div ending here... -->
    
  </body>
  </html>