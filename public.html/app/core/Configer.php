<?php

namespace app\core;

use app\dev\traits\setter;

class Configer      // занимается конфигами и хранит их
{
    use setter; 

    
    public function getDbConfig()
    {
        return $this->db_config;
    }


    public function getControllersRoute()
    {
        return $this->ways['controllers_path'];
    }

    public function getViewsPath()
    {
        return $this->ways['views_path'];
    }
}