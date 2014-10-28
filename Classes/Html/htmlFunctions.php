<?php


	//namespace Classes\Html;

	class htmlFunctions{

		public static $user_timeline_headings = ['Time and Date of Tweet','Tweet','Tweeted By','Screen name','Followers','Friends','Listed'];
		public static $followers_list_headings = ['Name', 'Screen Name'];
		public static $direct_messages_headings = ['Direct Message', 'Sender', 'Receiver'];
		public static $home_timeline_headings = ['Created Date', 'Tweet','Source','Name','Description'];
		public static $post_headings = ['Posted On','Post','Screen Name'];

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

		public static function printDirectmessages($content){
			
				$table = '<div id="horizontalTable"><table border="1"><tr>';
				$i = 0;
				foreach(self::$direct_messages_headings as $heading){
					$table .= '<th>' . self::$direct_messages_headings[$i] . '</th>';
					$i++;
				}
				$table .= '</tr><tr>';
				foreach($content as $item){
					$table .= '<td>' . $item->text . '</td>';
					$table .= '<td>' . $item->sender->screen_name . '</td>';
					$table .= '<td>' . $item->recipient->screen_name . '</td></tr>';
				}
				$table .= '</table></div>';
				echo $table;			
		}

		public static function printHometimeline($content){
			
				$table = '<div id="horizontalTable"><table border="1"><tr>';
				$i = 0;
				foreach(self::$home_timeline_headings as $heading){
					$table .= '<th>' . self::$home_timeline_headings[$i] . '</th>';
					$i++;
				}
				$table .= '</tr><tr>';
				foreach($content as $item){
					$table .= '<td>' . $item->created_at . '</td>';
					$table .= '<td>' . $item->text . '</td>';
					$table .= '<td>' . $item->source . '</td>';
					$table .= '<td>' . $item->user->name . '</td>';
					$table .= '<td>' . $item->user->description . '</td></tr>';
				}
				$table .= '</table></div>';
				echo $table;			
		}

		public static function printPost($content){
			
				$table = '<div id="horizontalTable"><table border="1"><tr>';
				$i = 0;
				foreach(self::$post_headings as $heading){
					$table .= '<th>' . self::$post_headings[$i] . '</th>';
					$i++;
				}
				$table .= '</tr><tr>';
					$table .= '<td>' . $content->created_at . '</td>';
					$table .= '<td>' . $content->text . '</td>';
					$table .= '<td>' . $content->user->screen_name . '</td>';
				$table .= '</table></div>';
				echo $table;		
		}
	}
?>