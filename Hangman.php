<?php
class Hangman
{
    private $gamer;
    private $wordToGuess;
    private $guessedLetters;

    public function __construct($wordToGuess, $gamer)
    {
        $this->gamer = $gamer;
        $this->wordToGuess = $wordToGuess;
        $this->guessedLetters = array();
    }

    public function getCorrectLetters(): array
    {
        $correctLetters = array();
        foreach ($this->gamer->getGuessedLetters() as $letter) {
            if (strpos($this->wordToGuess, $letter)) {
                $correctLetters[] = $letter;
            }
        }
        return $correctLetters;
    }

    public function getWordToGuess(): string
    {
        return $this->wordToGuess;
    }
}
