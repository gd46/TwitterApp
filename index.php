<?php

	require_once('Autoloader.php');
	spl_autoload_register('Autoloader::loader');

	//Set the oAuth and API Keys
	$settings = Classes\Twitter\config\settings::twitterAccess();

	echo '<h2>Twitter APP</h2>';

	// Gets user timeline
	$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
	$requestMethod = "GET";
	$getfield = '?screen_name=gdibella21&count=20';

	$twitter = new Classes\Twitter\TwitterAPIExchange($settings);

	$string = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest(), $assoc = TRUE);

	/* if($string["errors"][0]["message"] != ""){
		echo "<h3>Sorry, there was a problem.</h3>
		<p>Twiter returned the following error message:</p><p><em>"
		.$string[errors][0]["message"]."</em></p>"; exit();
	}*/

	//Prints out the user timeline
	foreach($string as $items)
    {
        echo "Time and Date of Tweet: ".$items['created_at']."<br />";
        echo "Tweet: ". $items['text']."<br />";
        echo "Tweeted by: ". $items['user']['name']."<br />";
        echo "Screen name: ". $items['user']['screen_name']."<br />";
        echo "Followers: ". $items['user']['followers_count']."<br />";
        echo "Friends: ". $items['user']['friends_count']."<br />";
        echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
    }
?>