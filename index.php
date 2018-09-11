<?php
/**
 * Gets classes
 */
require_once 'Hangman.php';
require_once 'Controller/GameController.php';
require_once 'View/GameView.php';
require_once "Model/Gamer.php";
require_once "Model/GamerStorage.php";

$storage = new \Model\GamerStorage();
$gamer = $storage->loadEntry('gamer');
$hangman = new Hangman('abba', $gamer);
$controller = new \Controller\GameController($gamer);
$storage->saveEntry('gamer', $gamer);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf8'>
    <title>Hangman</title>
  </head>
  <body>
  <h1>Hangman</h1>
<?php
echo $controller->askForGuess();
?>
  </body>
</html>