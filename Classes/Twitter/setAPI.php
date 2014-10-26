<?php
	
	namespace Classes\Twitter; 

	class setAPI{
		public static function setURL($url){

			$this->url = $url;
			return $this;
		}
		public static function setRequestmethod($requestMethod){
			$this->requestMethod = $requestMethod;
			return $this;
		}
		public static function setGetfield($getfield){
			$this->getfield = $getfield;
			return $this;
		}
	}
?>