<?php


	//namespace Classes\Html;

	class htmlFunctions{

		public static $user_timeline_headings = ['Time and Date of Tweet','Tweet','Tweeted By','Screen name','Followers','Friends','Listed'];
		public static $followers_list_headings = ['Name', 'Screen Name'];
		public static function printUsertimeline($content){
			
				$table = '<div id="horizontalTable"><table border="1"><tr>';
				$i = 0;
				foreach(self::$user_timeline_headings as $heading){
					$table .= '<th>' . self::$user_timeline_headings[$i] . '</th>';
					$i++;
				}
				$table .= '</tr><tr>';
				foreach($content as $items){
					$table .= '<td>' . $items->created_at . '</td>';
					$table .= '<td>' . $items->text . '</td>';
					$table .= '<td>' . $items->user->name . '</td>';
					$table .= '<td>' . $items->user->screen_name . '</td>';
					$table .= '<td>' . $items->user->followers_count . '</td>';
					$table .= '<td>' . $items->user->friends_count . '</td>';
					$table .= '<td>' . $items->user->listed_count . '</td></tr>';
				}
				$table .= '</table></div>';
				echo $table;

			
		}

		public static function printFollowerslist($content){
			
				$table = '<div id="horizontalTable"><table border="1"><tr>';
				$i = 0;
				foreach(self::$followers_list_headings as $heading){
					$table .= '<th>' . self::$followers_list_headings[$i] . '</th>';
					$i++;
				}
				$table .= '</tr><tr>';
				foreach($content->users as $item){
					$table .= '<td>' . $item->name . '</td>';
					$table .= '<td>' . $item->screen_name . '</td></tr>';
				}
				$table .= '</table></div>';
				echo $table;			
		}
	}
?>