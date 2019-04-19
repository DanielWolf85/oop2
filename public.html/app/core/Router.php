<?php

namespace app\core;

use app\dev\traits\getter;
use app\dev\traits\formatter;
use app\core\Checker;


class Router
{
    use getter;                     // используем инструменты getter, formatter
    use formatter;


    public $url;
    public $controller;
    public $action;
    public $checker;


    public function __construct()
    {
        $this->url = getter::getUrl();                                   // получаем url без слеша в конце и начале
        $this->controller = formatter::toController( $this->url );         // получаем контроллер в виде SiteController
        $this->action = formatter::toAction( $this->url );                 // получаем экшен в виде actionIndex
        $this->checker = new Checker;


        if ( $this->checker->controllerExists( $this->controller ) )     // здесь проверяем существование файла контроллера
        {
            $className = formatter::toControllerClassName( $this->controller );
            
            if ( $this->checker->classExists( $className ) )            // если контроллер найден, то мы проверяем существование класса
            {
                if ( $this->checker->actionExists( $className, $this->action ) )        // если найден, то мы ищем экшен в составе его методов
                {
                    $controller = new $className( $this->action );                                       // создаем экземпляр контроллера
                    $action = $this->action;                                            // присваиваем экшен
                    $controller->$action();                                             // вызываем экшен данного контроллера
                }
                else
                {
                    echo 'Экшен ' . $this->action . ' не найден';
                }
            }
            else
            {
                echo 'Класс ' . $this->controller . ' не найден';
            }
        }
        else
        {
            echo 'Контроллер ' . $this->controller . ' не найден';
        }
    }

}