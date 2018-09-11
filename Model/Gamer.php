<?php
namespace Model;

class Gamer
{
    private $guessedLetters;

    public function __construct()
    {
        $this->guessedLetters = array();
    }

    public function getGuessedLetters(): array
    {
        return $this->guessedLetters;
    }

    public function addGuessedLetter(string $letter): bool
    {
        $letter = strtolower($letter);
        foreach ($this->guessedLetters as $guessed) {
            if ($guessed == $letter) {
                return false;
            }
        }
        $this->guessedLetters[] = $letter;
        return true;
    }
}
