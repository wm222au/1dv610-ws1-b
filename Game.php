

<?php
    class Game
    {
        private $word;
        private $letterArray;
        private $guessedWord;

        public function Game($word){
            $this->word = $word;
            //ursprungsord
            $this->letterArray = str_split($word);
            $this->guessedWord = array();

            foreach($this->letterArray as $letter){
                $this->guessedWord[]="_";
            }
        }

        public function detectLetter(){
            return $_POST["letter"];
            /*foreach($this->letterArray as $letter){
                if($userInput === $letter){
                    //ersätt matchning i guessedLetter
                }
            }*/
        }

        public function guessedWord(){
            return implode($this->guessedWord);
        }

    

    }