<?php
session_start();
 ?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Great Number Game</title>
    <style>
    .equal{
      background-color: 'green';
      min-height: 100px;
      width: 200px;
    }
    .high{
      background-color: 'red';
      min-height: 100px;
      width: 200px;
    }
    .low{
      background-color: 'blue';
      min-height: 100px;
      width: 200px;
    }
  </head>
  <body>
    <h1>The Great Number Game</h1>
    <h3>I am thinking of a number between 1 and 100</h3>
    <h3>Take a guess!</h3>
     <?php if (isset($_SESSION['result'])){ ?>
     <div class= <?= $_SESSION['result'] ?>>
     </h3>
     <p>You guess is: <?= $_SESSION['result'] ?>.</p>
     <?php if($_SESSION['result'] == 'correct'){?>
       <a href="game.php><button>Play Again</button></a><?php
       session_destroy()
     </div>
     <?php?>
     <p>You guess is: <1/= $_SESSION['result'] ?>.</p>
     <?php if ($_SESSION['result'] == ['correct']{ ?>
     <div class= <?= $_SESSION['result'] ?>.</p>
     <form action="process.php" method="post">
      <input type="text" name="guess">
      <input type="submit" value = 'Submit'>
    </form>
  </body>
</html>
