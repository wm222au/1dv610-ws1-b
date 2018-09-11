<?php
namespace View;

class GameView
{
    private $gamer;

    public function __construct(\Model\Gamer $toBeViewed)
    {
        $this->gamer = $toBeViewed;
    }

    public function show(): string
    {
        global $hangman;
        $gameView = '
        <form action="./" method="get">
          <input type="text" name="guessLetter" maxlength="1"><br>
          <input type="submit" value="Translate">
          </form>
        ';

        var_dump($this->gamer->getGuessedLetters(), $hangman->getWordToGuess());

        return $gameView;
    }
}
