<?php

namespace app\dev\classes;


abstract class _Getter
{
    public $url;


    public function __construct()
    {
        $this->url = $this->getUrl();
    }


    public static function getUrl()                 // возвращает trim url без слешей
    {
        $url = trim( $_SERVER['REQUIEST_URI'], '/' );
        return $url;
    }
}