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

    public function addGuessedLetter(string $letter)
    {
        $this->guessedLetters[] = $letter;
    }
}
