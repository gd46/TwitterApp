<?php
	
	namespace Classes\Twitter; 

	class setAPI{
		public function setRequest($url, $requestMethod, $getfield){
			$this->url = $url;
			$this->requestMethod = $requestMethod;
			$this->getfield = $getfield;
			return $this;
		}
	}
?>