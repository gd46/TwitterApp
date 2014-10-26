<?php
	
	namespace Classes\Twitter; 

	class setAPI{
		public static function setURL($url){

			$this->$url;
			return $this;
		}
		public static function setRequestmethod($requestMethod){
			$this->$requestMethod;
			return $this;
		}
		public static function setGetfield($getfield){
			$this->$getfield;
			return $this;
		}
	}
?>