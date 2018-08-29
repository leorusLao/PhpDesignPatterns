<?php

/*
 *  实现化角色
 *  颜料
 */
abstract class Pigment{
    abstract public function use();
}

class Yellow extends Pigment{
    public function use(){
        echo '黄';
    }
}

class Green extends Pigment{
    public function use(){
        echo '绿';
    }
}

/*
 *  抽象化角色
 *  笔
 */
abstract class Pen{
    protected $Pig;
    public function __construct(Pigment $Pigment){
        $this->Pig = $Pigment;
    }
    public function usepigment(){

    }
}

class BigPen extends Pen{
    public function usepigment(){
        echo '大';
        $this->Pig->use();
    }
}

$BigYellow = new BigPen(new Yellow());
$BigYellow->usepigment();

?>