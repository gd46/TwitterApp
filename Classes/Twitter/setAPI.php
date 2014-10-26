<?php
	
	namespace Classes\Twitter; 

	class setAPI{
		public static function setURL($url){
			$this->url = $url;
		}
		public static function setRequestmethod($requestMethod){
			$this->requestMethod = $requestMethod;
		}
		public static function setGetfield($getfield){
			$this->getfield = $getfield;
		}
	}
?>