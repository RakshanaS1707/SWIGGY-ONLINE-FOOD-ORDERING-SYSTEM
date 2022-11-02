<!DOCTYPE html>
<html>
<head>
<title>ADMIN LOGIN</title>
</head>
<body bgcolor="lavenderblush">
<script>
function check()
{
    var pass=document.getElementById("password").value;
	if(pass==""){
	  document.getElementById("message").innerHTML="**please enter the password to login**";
	  return false;
	  }
	if(pass=="SA1234"){
	  alert("YOU HAVE SUCCESSFULLY LOGGED IN");
      window.location.href="addviewdel.php";
      return false;
    }
    else{
        alert("YOU ENTERED WRONG PASSWORD PLEASE TRY AGAIN");
        window.location.href="admin login.php";
        return false;
    }

}
</script>
<h1 style="color:seagreen;text-align:center;">ADMIN LOGIN</h1>
<form onsubmit="return check()" style="text-align:center">
<h2>ENTER ADMIN PASSWORD:<input type="password" id="password" value="">
<span id="message" style="color:tomato"></span><br><br><br>
<input type="submit" value="LOGIN">
</form>
</body>
</html>
