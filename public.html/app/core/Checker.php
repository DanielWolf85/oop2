<?php

namespace app\core;


use app\core\Configer;

class Checker                            // этот инструмент предназначен для проверки данных
{
    public $configer;

    public function __construct()
    {
        $this->configer = new Configer;
    }


    public function controllerExists( $controller )
    {
        $controllers_path = $this->configer->ways['controllers_path'];

        if ( file_exists( $controllers_path . $controller . '.php' ) )
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    public function classExists( $className )
    {
        if ( class_exists( $className ) )
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    public function actionExists( $className, $action )
    {
        if ( method_exists( $className, $action ) )
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    public function vewFileExists( $file )
    {
        $path = $this->configer->getViewsPath();
        echo $path;
        if ( file_exists( $file, $path ) )
        {
            return true;
        }
    }
}