<?php

class Panel {
    const MAX_CHARS_BY_LINE = 15;
    const HIDDEN_CHAR = "_";
    
    public function __construct(private string $clue, private string $text){}
    public function show() {
        $currentLineCharsNumber = 0;
        //Can we iterate a string as an array with foreach?
        //Explain why I decide TO NOT convert string to array
        for($i = 0; $i < strlen($this->text); ++$i) {
            if($this->text[$i] != " ") echo Panel::HIDDEN_CHAR;
            else echo " ";
            $currentLineCharsNumber = $this->checkNewLine($currentLineCharsNumber);
        }
    }

    private function checkNewLine(int $charsNumber): int {
        if($charsNumber == self::MAX_CHARS_BY_LINE) {
            echo PHP_EOL;
            return 0;
        }
        return ++$charsNumber;
    }
} 

?>