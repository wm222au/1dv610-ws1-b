<?php
/**
 * Gets classes
 */
require_once 'Controller/GameController.php';
require_once 'View/GameView.php';

$controller = new GameController();
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
$controller->askForGuess();
?>
  </body>
</html>