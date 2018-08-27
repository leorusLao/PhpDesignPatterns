<?php

/*
 *  对象适配器
 */
interface Target{
    public function extendFun1();
}

class Adaptee{
    public function myfunc(){
        echo 'my';
    }
}

class Adapter implements Target{
    private $_adaptee;
    public function __construct(Adaptee $adaptee){
        $this->_adaptee = $adaptee;
    }
    public function extendFun1(){
        $this->_adaptee->myfunc();
    }
}

$Adee = new Adaptee();
$Ader = new Adapter($Adee);
$Ader->extendFun1();


?>