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


/**
 * 第二种方式：类适配器
 */
interface Target2 {
    public function sampleMethod1();
    public function sampleMethod2();
}

class Adaptee2 { // 源角色
    public function sampleMethod1() {echo '++++++++';}
}

class Adapter2 extends Adaptee2 implements Target2 { // 适配后角色
    public function sampleMethod2() {echo '————————';}
}

$adapter = new Adapter2();
$adapter->sampleMethod1();//输出：++++++++
$adapter->sampleMethod2();//输出：————————


?>