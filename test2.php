<?php
class TextInput
{
    public $value;
    
    public function add($text) { 
        $this->value .= $text;
    }
    
    public function getValue() {
        return $this->value;
    }
    
}

class NumericInput extends TextInput 
{
    public function add($input) {
        if (is_numeric($input)) {
            $this->value .= $input;
        }
    }
}


$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('4');
echo $input->getValue();
