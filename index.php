<html>
    <head>
        <title>Hang man</title>
    </head>
    <body>
        <form action="" method="post">
        <input type="text" name="letter">
        <input type="submit">
        </form>
    </body>
</html>

<?php
require_once("Game.php");
$game = new Game("exempel");

$postRequest = $_POST["letter"];

if(isset($postRequest)) {
    $game->detectLetter($postRequest);
}

$guessedWord = $game->guessedWord();
//$guessedLetter = $game->detectLetter();

echo $guessedWord;