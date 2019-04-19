<?php

namespace app\dev\traits;


trait requirer
{
    public static function call( $path )
    {
        if (file_exists( $path ))
        {
            require_once $path;
        }
        else
        {
            exit ('Файл ' . $path . ' не найден');
        }
        
    }
}