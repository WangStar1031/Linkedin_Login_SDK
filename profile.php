<?php
	include "linkedin.php";

	$linkedin = new LinkedIn(array(
		'apiKey' => '817ghsoujbnznd',
		'apiSecret' => 'QgrxQm1Dsup3D5J9',
		'callbackUrl' => 'http://esl-ninja.com/Questionnaire/profile.php',
	));
	$code = $_GET['code'];
	$token = $linkedin->getAccessToken($code);
	print_r($token);
	echo "<br/>";
	$options = ":(first-name,last-name,headline,picture-url)";
	$info = $linkedin->get('/people/~', $options);
	print_r($info);
?>