<?php
	if(isset($_POST['submit']))
	{
		$apiToken = "6681763236:AAFc_BwwtCcWqSky1iupcm_w7QA1WeaASI4";
		$data = [
		    'chat_id' => '@Shamobotbot', 
		    'text' => $_POST['message']
		];
		$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );	
	}
?>