<?php
class Game
{
    private $wordToGuess;
    private $letterArray;
    private $guessedWord;

    public function Game($wordToGuess)
    {
        $this->word = $wordToGuess;
        //ursprungsord
        $this->letterArray = str_split($wordToGuess);
        $this->guessedWords = array();

        foreach ($this->letterArray as $letter) {
            $this->guessedWord[] = "_";
        }
    }

    public function detectLetter($userInput)
    {
        $nr = 0;
        foreach ($this->letterArray as $letter) {
            if ($userInput === $letter) {
                //ersätta värdet i guessedWord
                $this->guessedWord[$nr] = $userInput;
                //echo "hej";
            }
            $nr .= 1;
            //echo "hej";
        }
    }

    public function guessedWord()
    {
        return implode($this->guessedWord);
    }
}
