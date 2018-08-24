<?php

    /*
    * 单例模式
    * Singleton(单例模式):单例模式是最常见的模式之一，在Web应用的开发中，常常用于允许在运行时为某个特定的类创建仅有一个可访问的实例。
    */

    final class mysql{

        /*
         * 该属性用来保存实例
         */
        private static $instance;

        public $mix;

        /*
         * 创建一个用来实例化对象的方法
         */
        public static function getInstance(){
            if(! (self::$instance instanceof self)){
                self::$instance = new self();
            }
            return self::$instance;
        }


        /*
         * 构造函数设为private 防止创建对象
         */
        private function __construct(){

        }

        /*
         * 防止对象被克隆
         */
        private function __clone(){
            trigger_error('Clone is not allow!');
        }


    }


    // @test
    $first = mysql::getInstance();
    $second = mysql::getInstance();

    $first->mix = 'one';
    $second->mix = 'two';

    print_r($first->mix);
    //two
    print_r($second->mix);
    //two


?>