<?php


/*原型接口*/
interface Prototype{
    public function copy();
}

/*具体实现*/
class ConcretePrototype implements Prototype{
    private $_name;
    public function __construct($name){ $this->_name = $name; }
    public function copy(){ return clone $this; }
}

class Test{};

$obj1 = new ConcretePrototype(new Test());
var_dump($obj1);
$obj2 = $obj1->copy();
var_dump($obj2);

?>