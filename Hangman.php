<?php
class Hangman
{
    private $wordToGuess;
    private $guessedLetters;

    public function __construct($wordToGuess)
    {
        $this->wordToGuess = $wordToGuess;
        $this->guessedLetters = array();
    }

    public function getCorrectLetters(): bool
    {
        $correctLetters = array();
        foreach ($this->guessedLetters as $letter) {
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

    public function guessLetter($letter)
    {
        $this->guessedLetters[] = $letter;
    }
}
