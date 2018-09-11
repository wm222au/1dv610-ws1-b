<?php
namespace View;

class GameView
{
    public function __construct()
    {
    }

    public function show(): string
    {
        $gameView = '
        <form action="./" method="get">
          <input type="text" name="guessLetter" maxlength="1"><br>
          <input type="submit" value="Translate">
          </form>
        ';

        return $gameView;
    }
}
