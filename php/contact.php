<?php
$to = "admin@soundpressrecords.com";
$email = $_REQUEST['email'] ;
$subject = "Soundpress Records Email Addition: $email";
$headers = "Soundpress Records Email Addition";
$body = "Email:\n $email";
$sent = mail($to, $subject, $body, $headers) ;
if($sent)
{echo "<script language=javascript>window.location = 'http://www.soundpressrecords.com/thanks.html';</script>";}
else
{echo "<script language=javascript>window.location = 'http://www.soundpressrecords.com/shit.html';</script>";}
?>