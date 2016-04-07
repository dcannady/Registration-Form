<?php

session_start();
 // we dont have a random number in session, create one!
  if (!isset($_SESSION['randum'])){
    $_SEESION['randum'] = rand(1,100);
  }
  if ($_POST['guess'] == $_SESSION[randum]){
    $_SESSION['result'] = 'correct';
    // set as session so we can reuse it on our game page!

  }
  elseif ($_POST['guess'] > $_SESSION['randNum'] ){
    $_SESSION['result'] ='high';
  }
  else {
    $_SESSION['result'] ='low';
  }
  // echo('helo');
  header("Location:game.php");
  exit();
?>
