Add a settings.php file to Classes/Twitter/config that looks something like the following:

namespace Classes\Twitter\config;

	class settings{
		public function twitterAccess(){
			$settings = array(
			    'oauth_access_token' => "OauthAccessToken",
			    'oauth_access_token_secret' => "OauthAccessTokenSecret",
			    'consumer_key' => "ConsumerKey",
			    'consumer_secret' => "ConsumerSecret"
			);
			return $settings;
		}
	}