<?php


	namespace Classes\Html;

	class htmlFunctions{

		public static $user_timeline_headings = ['Time and Date of Tweet','Tweet','Tweeted by','Screen name','Followers','Friends','Listed'];
		
		public static function printVerticaltable($string){
			$table = '<div id="verticalTable"><table border="1">';
				foreach($string as $items){
					$table .= '<tr><th>' . self::$user_timeline_headings[0] . '</th><td>' . $items['created_at'] . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[1] . '</th><td>' . $items['text'] . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[2] . '</th><td>' . $items['user']['name'] . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[3] . '</th><td>' . $items['user']['screen_name'] . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[4] . '</th><td>' . $items['user']['followers_count'] . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[5] . '</th><td>' . $items['user']['friends_count'] . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[6] . '</th><td>' . $items['user']['listed_count'] . '</td></tr>';
				}
				$table .= '</table></div>';
				echo $table; 
		}

		public static function printHorizontaltable($string){
			$table = '<div id="horizontalTable"><table border="1"><tr>';
				$i = 0;
				foreach(self::$user_timeline_headings as $heading){
					$table .= '<th>' . self::$user_timeline_headings[$i] . '</th>';
					$i++;
				}
				$table .= '</tr><tr>';
				foreach($string as $items){
					$table .= '<td>' . $items['created_at'] . '</td>';
					$table .= '<td>' . $items['text'] . '</td>';
					$table .= '<td>' . $items['user']['name'] . '</td>';
					$table .= '<td>' . $items['user']['screen_name'] . '</td>';
					$table .= '<td>' . $items['user']['followers_count'] . '</td>';
					$table .= '<td>' . $items['user']['friends_count'] . '</td>';
					$table .= '<td>' . $items['user']['listed_count'] . '</td></tr>';
				}
				$table .= '</table></div>';
				echo $table;
		}

		public static function printTable($string,$printDirection){
			
			if($printDirection == 'vertical'){
				\Classes\Html\htmlFunctions::printVerticaltable($string);
			}
			else{
				\Classes\Html\htmlFunctions::printHorizontaltable($string);
			}	
		}
	}
?>