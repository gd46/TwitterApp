<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>
</html>
<?php

	//require_once('Autoloader.php');
	//spl_autoload_register('Autoloader::loader');

	require_once('Classes/Twitter/twitteroauth/TwitterOAuth.php');
	require_once('Classes/Twitter/twitteroauth/OAuth.php');
	//require('Classes/Twitter/twitteroauth/OAuthConsumer.php');
	//require('Classes/Twitter/twitteroauth/OAuthDataStore.php');
	//require('Classes/Twitter/twitteroauth/OAuthRequest.php');
	//require('Classes/Twitter/twitteroauth/OAuthServer.php');
	//require('Classes/Twitter/twitteroauth/OAuthSignatureMethod.php');
	//require('Classes/Twitter/twitteroauth/OAuthSignatureMethod_HMAC_SHA1.php');
	//require('Classes/Twitter/twitteroauth/OAuthSignatureMethod_PLAINTEXT.php');
	//require('Classes/Twitter/twitteroauth/OAuthSignatureMethod_RSA_SHA1.php');
	//require('Classes/Twitter/twitteroauth/OAuthToken.php');
	//require('Classes/Twitter/twitteroauth/OAuthUtil.php');
	require_once('Classes/Twitter/config/config.php');
	require('Classes/Html/htmlFunctions.php');
	
	echo '<h2>Twitter APP</h2>';

	$connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);

	include('Includes/html.inc');
?>

