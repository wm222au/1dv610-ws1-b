

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

        public function detectLetter($userInput){
            $nr = 0;
            foreach($this->letterArray as $letter){
                if($userInput === $letter){
                    //ersätta värdet i guessedWord
                    $this->guessedWord[$nr] = $userInput;
                    //echo "hej";
                }
                $nr .= 1;
                //echo "hej";
        }
        }

        public function guessedWord(){
            return implode($this->guessedWord);
        }

    

    }