<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
	</head>
</html>
<?php

	//require_once('Autoloader.php');
	//spl_autoload_register('Autoloader::loader');

	require_once('Classes/Twitter/twitteroauth/TwitterOAuth.php');
	require_once('Classes/Twitter/config/config.php');
	require('Classes/Html/htmlFunctions.php');
	

	echo '<h2>Twitter APP</h2>';

	$connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);

	//Gets user timeline
	//$content = $connection->get('statuses/user_timeline', array('screen_name' => 'gdibella21'));

	$content = $connection->get('followers/list', array('screen_name' => 'gdibella21'));

	foreach($content as $items){
		echo $items->users->name;
		echo $items->users->screen_name;
	}
	var_dump($content);

	//htmlFunctions::printUsertimeline($content);
?>