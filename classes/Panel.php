<?php

class Panel {

    const HIDDEN_CHAR = "_";
    
    public function __construct(private string $clue, private string $text){}
    public function show(){
        //Can we iterate a string as an array with foreach?
        //Explain why I decide TO NOT convert string to array
        for($i = 0; $i < strlen($this->text); ++$i) {
            if($this->text[$i] != " ") echo Panel::HIDDEN_CHAR;
            else echo " ";
        }
    }
} 

?>