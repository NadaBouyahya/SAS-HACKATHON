<?php

require_once "../buisness/playerBLL.php";
    
    $playerBal = new PlayerBLL();

if(!empty($_POST)){
	$player = new player();
	$player->setUserName($_POST['username']);

	$playerBal->addPlayer($player);
	
	// redirect to index.php
}
?>

<form action="" method="POST">
Name: <input type="text" name="username" >                                                          
   
<button type="submit">add +</button>
</form>