<?php
namespace View;

class GameView
{
    private $gamer;

    public function __construct(\Model\Gamer $toBeViewed)
    {
        $this->gamer = $toBeViewed;
    }

    private function getCorrectGuesses()
    {
        global $hangman;
        return array_intersect(str_split($hangman->getWordToGuess()), $this->gamer->getGuessedLetters());
    }

    public function show(): string
    {
        global $hang;

        $gameView = '
        <form action="./" method="get">
          <input type="text" name="guessLetter" maxlength="1"><br>
          <input type="submit" value="Translate">
          </form>
        ';

        // var_dump($this->gamer->getGuessedLetters(), $hangman->getWordToGuess());

        $guesses = count($this->gamer->getGuessedLetters()) - count($this->getCorrectGuesses());
        if ($guesses > 6) {
            $guesses = 6;
        } else if ($guesses < 0) {
            $guesses = 0;
        }

        $gameView .= '<pre>' . $hang[$guesses] . '</pre>';

        $gameView .= implode($this->getCorrectGuesses());

        return $gameView;

    }
}
