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
	

	//Set the oAuth and API Keys
	//$settings = Classes\Twitter\config\settings::twitterAccess();
	//$twitter = new Classes\Twitter\TwitterAPIExchange($settings);

	echo '<h2>Twitter APP</h2>';

	$connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);

	$content = $connection->get('statuses/user_timeline', array('screen_name' => 'gdibella21'));

	//newOperation is the twitter call for pulling recents tweets from timeline.
	
	//$twitter->get('https://api.twitter.com/1.1/statuses/user_timeline.json', '?screen_name=gdibella21&count=20');

	//$newOperation = new Classes\Twitter\setAPI();
	//$newOperation->setRequest('https://api.twitter.com/1.1/statuses/user_timeline.json','GET','?screen_name=gdibella21&count=20');
	//Returns a JSON response from Twitter
	//$string = json_decode($twitter->setGetfield($newOperation->getfield)->buildOauth($newOperation->url, $newOperation->requestMethod)->performRequest(), $assoc = TRUE);

	/* if($string["errors"][0]["message"] != ""){
		echo "<h3>Sorry, there was a problem.</h3>
		<p>Twiter returned the following error message:</p><p><em>"
		.$string[errors][0]["message"]."</em></p>"; exit();
	}*/
	
	//Classes\Html\htmlFunctions::printTable($content, 'horizontal');

	htmlFunctions::printUsertimeline($content);
?>