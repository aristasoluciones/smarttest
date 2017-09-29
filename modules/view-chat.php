<?php

	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	
	// echo "<pre>"; print_r($_POST);
	// echo "<pre>"; print_r($_GET);
	// exit;
	$lstChat = $chat->entablandoConversacion($_GET["q"]);

	
	$smarty->assign('chatId',$_GET["q"]);
	$smarty->assign('lstChat',$lstChat);
	
?>