<?php

/*工厂模式*/
interface CarFactory{
    public function createCar($type);
}

class myCar implements CarFactory{

    public function createCar($type){
        switch($type){
            case 'BMW':
                return new BMW();
                break;
            case 'Benz':
                return new Benz();
                break;
            case 'Audi':
                return new Audi();
                break;
        }
    }

}

class Car{}
class BMW extends Car{}
class Benz extends Car{}
class Audi extends Car{}

$factory = new myCar();

$audi = $factory->createCar('Audi');

var_dump($audi);

?>