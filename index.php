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

$length = $game->guessedWord();
$guessedLetter = $game->detectLetter();

echo $guessedLetter;