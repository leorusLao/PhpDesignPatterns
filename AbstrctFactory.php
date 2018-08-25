<?php

class Car{}
class Tyre{}

class AudiCar extends Car{}
class AudiTyre extends Tyre{}

class BMWCar extends Car{}
class BMWTyre extends Tyre{}

/**
 * AbstractFactory class[抽象工厂模式]
 */
interface AbstrctFactory{
    public function createCar();
    public function createTyre();
}

class AudiFactory implements AbstrctFactory{
    public function createCar()
    {

    }
    public function createTyre()
    {

    }
}

class BWMFactory implements AbstrctFactory{
    public function createCar()
    {

    }
    public function createTyre()
    {

    }
}

$audiFactory = new AudiFactory();

$audiFactory->createCar();
$audiFactory->createTyre();


?>