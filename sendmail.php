<?php
$to_email="shruthijeya7@gmail.com";
$subject="your order will be delivered shortly thank you for ordering";
$body="this is to your notice";
$header="From:shruthijeya7@gmail.com";
if(mail($to_email,$subject,$body,$header))
{
    echo "Email sent successfully to $to_email.....";
}
else{
    echo"Failed to send the mail";
}
?>