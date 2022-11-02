<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
if(empty($name)|| empty($email) || empty($message)){
    echo "please fill in all the details";
}
else{
    ini_set($message,"from:$name<$email>");
    echo"<script type='text/javascript'>alert('your message has be sent')
    windows.history.log(-1);
    </script>";
}
?>