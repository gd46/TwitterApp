<h2>Twitter APP</h2>
<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
				User Timeline
			</a>
		</h4>
	</div>
	<div id="collapseOne" class="panel-collapse collapse">
		<div class="panel-body">
			<?php 
				$content = $connection->get('statuses/user_timeline', array('screen_name' => 'gdibella21'));
				htmlFunctions::printUsertimeline($content);
			?>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				Followers List
			</a>
		</h4>
	</div>
	<div id="collapseTwo" class="panel-collapse collapse">
		<div class="panel-body">
			<?php 
				$content = $connection->get('followers/list', array('screen_name' => 'gdibella21'));
				htmlFunctions::printFollowerslist($content);
			?>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
				Post to Timeline
			</a>
		</h4>
	</div>
	<div id="collapseThree" class="panel-collapse collapse">
		<div class="panel-body">
			<form method="POST" action="index.php">
					<label for id="status">Tweet</label><input type="text" name="status" id="status">
					<input type="submit">
			</form>
			<?php 
				$content = $connection->post('statuses/update', array('status' => $_POST['status']));
				htmlFunctions::printPost($content);	
			?>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
				Direct Messages
			</a>
		</h4>
	</div>
	<div id="collapseFour" class="panel-collapse collapse">
		<div class="panel-body">
			<?php 
				$content = $connection->get('direct_messages/sent', array('count' => 20));
				htmlFunctions::printDirectmessages($content);
			?>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
				Home Timeline
			</a>
		</h4>
	</div>
	<div id="collapseFive" class="panel-collapse collapse">
		<div class="panel-body">
			<?php 
				$content = $connection->get('statuses/home_timeline', array('count' => 100));
				htmlFunctions::printHometimeline($content);
			?>
		</div>
	</div>
</div>