<?php

/*
 * 单例模式创建工厂
 */
abstract class SingleFactory{

    /*保存实例的数组*/
    protected static $instances = array();

    /*创建实例*/
    public static function getInstance(){
        $ClassName = self::getClassName();
        if(!(self::$instances[$ClassName] instanceof $ClassName)){
            self::$instances[$ClassName] = new $ClassName();
        }
        return self::$instances[$ClassName];
    }

    /*移除实例*/
    public static function removeInstance(){
        $ClassName = self::getClassName();
        if(array_key_exists($ClassName,self::$instances)){
            unset(self::$instances[$ClassName]);
        }
    }

    final protected static function getClassName(){
        return get_called_class();
    }

    /*防止被创建*/
    protected function __construct(){}

    /*防止被复制*/
    protected function __clone(){ }

}

class single extends SingleFactory {
    public $a;
}

$first = single::getInstance();
$second = single::getInstance();

$first->a = 'first';
$second->a = 'second';

echo $first->a;
echo $second->a;

?>