<?php


	//namespace Classes\Html;

	class htmlFunctions{

		public static $user_timeline_headings = ['Time and Date of Tweet','Tweet','Screen name','Followers','Friends','Listed'];
		
		public static function printUsertimeline($content){
			$table = '<div id="verticalTable"><table border="1">';
				/*foreach($string as $items){
					$table .= '<tr><th>' . self::$user_timeline_headings[0] . '</th><td>' . $items->created_at . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[1] . '</th><td>' . $items->text . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[2] . '</th><td>' . $items->screen_name . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[3] . '</th><td>' . $items->followers_count . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[4] . '</th><td>' . $items->friends_count . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[5] . '</th><td>' . $items->listed_count . '</td></tr>';
				}*/
				foreach($content as $items){
					$table .= '<tr><th>' . self::$user_timeline_headings[0] . '</th><td>' . $items->created_at . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[1] . '</th><td>' . $items->text . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[2] . '</th><td>' . $items->user->screen_name . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[3] . '</th><td>' . $items->user->followers_count . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[4] . '</th><td>' . $items->user->friends_count . '</td></tr>';
					$table .= '<tr><th>' . self::$user_timeline_headings[5] . '</th><td>' . $items->user->listed_count . '</td></tr>';
			
				$table .= '</table></div>';
				echo $table; 
			}
		}
	}
?>