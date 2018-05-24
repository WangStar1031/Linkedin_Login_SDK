<?php
	include "linkedin.php";

	$linkedin = new LinkedIn(array(
		'apiKey' => '817ghsoujbnznd',
		'apiSecret' => 'QgrxQm1Dsup3D5J9',
		'callbackUrl' => 'http://mytest.com:8000/dashboard',
	));
	$code = $_GET['code'];
	$token = $linkedin->getAccessToken($code);
	print_r($token);
	echo "<br/>";
	$options = ":(first-name,last-name,headline,picture-url)";
	$info = $linkedin->get('/people/~', $options);
	print_r($info);
	$email = $linkedin->get('/people/~:(email-address)',"");
	print_r($email);
?>