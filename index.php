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
	require_once('Classes/Html/htmlFunctions.php');
	

	//Set the oAuth and API Keys
	//$settings = Classes\Twitter\config\settings::twitterAccess();
	//$twitter = new Classes\Twitter\TwitterAPIExchange($settings);

	echo '<h2>Twitter APP</h2>';

	$connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);

	$content = $connection->get('users/show', array('screen_name' => 'gdibella21'));

	var_dump($content);

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
	$string = json_decode($content);
	foreach($string as $items){
		$test = $content['user']['screen_name'];
		echo $test;
	}
	
	/*$user_timeline_headings = ['Time and Date of Tweet','Tweet','Tweeted by','Screen name','Followers','Friends','Listed'];
		
			$table = '<div id="verticalTable"><table border="1">';
				foreach($content as $items){
					$table .= '<tr><th>' . $user_timeline_headings[0] . '</th><td>' . $items['created_at'] . '</td></tr>';
					$table .= '<tr><th>' . $user_timeline_headings[1] . '</th><td>' . $items['text'] . '</td></tr>';
					$table .= '<tr><th>' . $user_timeline_headings[2] . '</th><td>' . $items['user']['name'] . '</td></tr>';
					$table .= '<tr><th>' . $user_timeline_headings[3] . '</th><td>' . $items['user']['screen_name'] . '</td></tr>';
					$table .= '<tr><th>' . $user_timeline_headings[4] . '</th><td>' . $items['user']['followers_count'] . '</td></tr>';
					$table .= '<tr><th>' . $user_timeline_headings[5] . '</th><td>' . $items['user']['friends_count'] . '</td></tr>';
					$table .= '<tr><th>' . $user_timeline_headings[6] . '</th><td>' . $items['user']['listed_count'] . '</td></tr>';
				}
				$table .= '</table></div>';
				echo $table; */
		

	//Classes\Html\htmlFunctions::printTable($content, 'horizontal');
?>