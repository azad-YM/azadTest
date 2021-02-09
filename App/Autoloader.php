<?php 


namespace App;


class Autoloader{



    public static function  callAutoloader(){

        spl_autoload_register([__CLASS__, 'autoloader']);
    }

    public static function autoloader($class_name){

        if(strpos($class_name, __NAMESPACE__) === 0){

            $class_name = str_replace(__NAMESPACE__.'\\', '', $class_name);
            $class = str_replace('\\', '/', $class_name);
            
            require __DIR__.'/'. $class.'.php';
        }
    }
}