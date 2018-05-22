<?php
// phpinfo();
	include "linkedin.php";
	$linkedin = new LinkedIn(array(
		'apiKey' => '817ghsoujbnznd',
		'apiSecret' => 'QgrxQm1Dsup3D5J9',
		'callbackUrl' => 'http://esl-ninja.com/Questionnaire/profile.php',
	));
	// $li = new LinkedIn(
	// 	array(
	// 		'api_key' => '817ghsoujbnznd',
	// 		'api_secret' => 'QgrxQm1Dsup3D5J9', 
	// 		'callback_url' => 'http://esl-ninja.com/Questionnaire/profile.php'
	// 	)
	// );
	$url = $linkedin->getLoginUrl();
	// $url = $li->getLoginUrl(
	// 	array(
	// 		LinkedIn::SCOPE_BASIC_PROFILE, 
	// 		LinkedIn::SCOPE_EMAIL_ADDRESS, 
	// 		LinkedIn::SCOPE_NETWORK
	// 	)
	// );
?>
<a href="<?= $url ?>">Social Login ( LinkedIn )</a>
