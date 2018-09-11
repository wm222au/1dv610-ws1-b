<?php
namespace Controller;

class GameController
{
    private $gamer;
    private $view;

    public function __construct(\Model\Gamer $gamer)
    {
        $this->gamer = $gamer;
        $this->view = new \View\GameView($this->gamer);
    }

    public function askForGuess(): string
    {
        global $hangman;
        $guessedLetter = (isset($_GET['guessLetter']) ? $_GET['guessLetter'] : false);
        if ($guessedLetter) {
            $this->gamer->addGuessedLetter($guessedLetter);
        }

        return $this->view->show();
    }
}
