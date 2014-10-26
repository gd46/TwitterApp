<?php

	require_once('Autoloader.php');
	spl_autoload_register('Autoloader::loader');

	echo '<h2>Twitter APP</h2>';

	$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

	$requestMethod = "GET";

	$getfield = '?screen_name=gdibella21&count=20';

	$twitter = new Classes\Twitter\TwitterAPIExchange(Classes\Twitter\config\settings::twitterAccess());

	$string = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest(), $assoc = TRUE);

	/* if($string["errors"][0]["message"] != ""){
		echo "<h3>Sorry, there was a problem.</h3>
		<p>Twiter returned the following error message:</p><p><em>"
		.$string[errors][0]["message"]."</em></p>"; exit();
	}*/
	
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