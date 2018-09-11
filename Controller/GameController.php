<?php
namespace Controller;

class GameController
{
    private $view;
    // private $user;

    public function __construct()
    {
        // $this->user = $user;
        $this->view = new \View\GameView();
    }

    public function askForGuess(): string
    {
        global $hangman;
        $guessedLetter = (isset($_GET['guessLetter']) ? $_GET['guessLetter'] : '');

        var_dump($guessedLetter);

        $hangman->guessLetter($guessedLetter);

        return $this->view->show();
    }
}
