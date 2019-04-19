<?php

namespace app\core;

use app\dev\traits\getter;


class Spy                              
{
    use getter;                  // здесь мы используем трейт getter, который добывает информацию

    public $url;
    public $viewsPath;


    public function __construct()               // в конструкторе автоматически мы присваиваем все нужные свойства
    {
        $this->url = getter::getUrl();
    }
}

