<?php

namespace app\dev\classes;

use app\dev\traits\getter;

abstract class _Spy                              
{
    use getter;                  // здесь мы используем трейт getter, который добывает информацию

    public $url;
    


    public function __construct()               // в конструкторе автоматически мы присваиваем все нужные свойства
    {
        $this->url = getter::getUrl();
    }
}

