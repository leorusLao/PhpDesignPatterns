<?php

class grandpa{
    public $name = 'grandpa';
    public function say(){
        echo $this->name;
    }
}

class parents extends grandpa {
    public function call(){
        echo $this->name;
    }
}

class son extends parents{
    public function tell(){
        echo $this->name;
    }
}

$son = new son();
$son->tell();

?>