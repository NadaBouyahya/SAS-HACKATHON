<?php

require_once "../buisness/playerBLL.php";
    
    $playerBal = new PlayerBLL();

if(!empty($_POST)){
	$player = new player();
	$player->setUserName($_POST['username']);

	$playerBal->addPlayer($player);
	
	// redirect to index.php
  header('location:game.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Website Landing Page Design</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>
    <section>
      <header>
        <h2><a href="#" class="logo">FAST TYPING</a></h2>
        <div class="navigation">
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Contact</a>
        </div>
      </header>
      <div class="content">
        <div class="info">
          <h2>Fast Typing <br><span>Type like a pro!</span></h2>
          <p> Typing well on the keyboard is very important. With "Fast Typing", you learn how to position your fingers to type like a pro, effortlessly. You learn with a fun game how to improve your speed and accuracy</p>
          <form action="" method="POST">
          <input type="text" name="username" class="inputBox" placeholder="  Enter a username" >
          <button href="#" class="info-btn" type="submit">Let's Start</button>
          </form>
        </div>
      </div>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </section>

  </body>
</html>
      