<?php

	require_once('TwitterAPIExchance.php');
	require_once('settings.php');

	echo '<h2>Twitter APP</h2>';

	$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

	$requestMethod = "GET";

	$getfield = '?screen_name=gdibella21&count=20';

	$twitter = new TwitterAPIExchance($settings);

	echo $twitter->setGefield($getfield)->buildOauth($url, $requestMethod)->performRequest();
?>