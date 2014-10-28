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

	//Different Twitter API Calls

	//Gets user timeline
//1.//$content = $connection->get('statuses/user_timeline', array('screen_name' => 'gdibella21'));
	//Gets followers list
//2.//$content = $connection->get('followers/list', array('screen_name' => 'gdibella21'));
	//Posts to twitter
//3.//$content = $connection->post('statuses/update', array('status' => 'Post to twitter via api'));
	//Gets Direct Messages
//4.//$content = $connection->get('direct_messages/sent', array('count' => 20));
	//Prints home timeline
//5.//$content = $connection->get('statuses/home_timeline', array('count' => 100));

	
	/************************************************/
	
	//Prints the different responses

	//Print user timeline
	//htmlFunctions::printUsertimeline($content);
	//Print followers list
	//htmlFunctions::printFollowerslist($content);
	//Prints direct messages
	//htmlFunctions::printDirectmessages($content);
	//Prints home timeline
	//htmlFunctions::printHometimeline($content);
?>