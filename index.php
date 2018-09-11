<?php
/**
 * Gets classes
 */
require_once 'Hangman.php';
require_once 'Controller/GameController.php';
require_once 'View/GameView.php';

$controller = new \Controller\GameController();
$hangman = new Hangman('abba');
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