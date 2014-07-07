<?php
$subject ="Contact form from".$_POST["phone"]; 
$message=$_POST["detail"];
$mail_from=$_POST["customer_mail"];
$header="from: $name $phone <$mail_from>";
$to ='8005551234@example.com';
$send_contact=mail($to,$subject,$message,$header);
if($send_contact){
echo "We've recived your contact information";
}
else {
echo "ERROR";
}
?>

<!--
USE ONE OF THESE EMAIL ADDRESSES (WITH YOUR CARRIER) IN THE $to SECTION WITH YOUR NUMBER:
AT&T: number@txt.att.net
T-Mobile: number@tmomail.net
Verizon: number@vtext.com
Sprint: number@messaging.sprintpcs.com or number@pm.sprint.com
Virgin Mobile: number@vmobl.com
Tracfone: number@mmst5.tracfone.com
Metro PCS: number@mymetropcs.com
Boost Mobile: number@myboostmobile.com
Cricket: number@sms.mycricket.com
Nextel: number@messaging.nextel.com
Alltel: number@message.alltel.com
Ptel: number@ptel.com
Suncom: number@tms.suncom.com
Qwest: number@qwestmp.com
U.S. Cellular: number@email.uscc.net
--!>

