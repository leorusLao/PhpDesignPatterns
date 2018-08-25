<?php

/*汉堡*/
class Hamburger{
    private $_material;
    public function __construct(){
        $this->_material = array();
    }
    public function add($material){
        return array_push($this->_material, $material);
    }
}

/*
 * 建造者抽象类
 */
abstract class Builder{
    /*压面包*/
    public abstract function pressureBread();
    /*挤沙拉酱*/
    public abstract function SqueezingSalad();
    /*放肉片*/
    public abstract function dischargeMeat();
    /*撒蔬菜*/
    public abstract function SowVegetables();
    /*包装*/
    public abstract function Packing();
    public abstract function getResult();
}


/*
 *  具体建造者
 */
class ConcreteBuilder extends Builder{
    private $_hamburger;
    public function __construct(){ $this->_hamburger = new Hamburger(); }
    /*压面包*/
    public function pressureBread(){ $this->_hamburger->add('pressureBread'); }
    /*挤沙拉酱*/
    public function SqueezingSalad(){ $this->_hamburger->add('SqueezingSalad'); }
    /*放肉片*/
    public function dischargeMeat(){ $this->_hamburger->add('dischargeMeat'); }
    /*撒蔬菜*/
    public function SowVegetables(){ $this->_hamburger->add('SowVegetables'); }
    /*包装*/
    public function Packing(){ $this->_hamburger->add('Packing'); }
    public function getResult(){ return $this->_hamburger; }
}

/*
 * 导演者
 */
class Director{
    public function __construct(Builder $builder){
        $builder->pressureBread();
        $builder->SqueezingSalad();
        $builder->dischargeMeat();
        $builder->SowVegetables();
        $builder->Packing();
    }
}


/*做一个麦香鸡腿堡吧*/
$builder = new ConcreteBuilder();
$director = new Director($builder);
$hamburger = $builder->getResult();

var_dump($hamburger);



?>