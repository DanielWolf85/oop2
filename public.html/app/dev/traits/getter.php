<?php

namespace app\dev\traits;


trait getter                            // этот инструмент предназначен для выборки данных
{

    public static function getUrl()                            // возвращает trim url без слешей
    {
        $url = trim( $_SERVER['REQUEST_URI'], '/' );
        if ($url == '')
        {
            $url = 'site/index';
        }
        return $url;
    }

    
}