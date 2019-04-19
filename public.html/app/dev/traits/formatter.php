<?php

namespace app\dev\traits;


trait formatter             // этот инструмент предназначен для форматирования и трансформации данных
{

    public static function explodeUrl( $url )
    {
        $arr = explode('/', $url);
        return $arr;
    }


    public static function toController( $url ) // формирует Контроллер в виде SiteControler
    {
        $arr = self::explodeUrl( $url );
        $controller = ucfirst($arr[0]) . 'Controller';
        return $controller;
    }


    public static function toAction( $url )     // формирует Экшен в виде actionIndex
    {
        $arr = self::explodeUrl( $url );                  // разбивает дробью url

        if (isset($arr[1]))                         // если существует вторая часть
        {   
            $action = 'action' . ucfirst($arr[1]);      // формирует вид экшена
        }
        else                                                // если вторая часть не найдена
        {
            header ('Location: ' . $arr[0] . '/index');         // перенаправляет пользователя на index данного контроллера
        }
        
        return $action;                                         // возвращает сформированный экшен
    }


    public static function toControllerClassName( $controller )
    {
        return 'app\controllers\\' . $controller;
    }
}