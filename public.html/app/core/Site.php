<?php

namespace app\core;

use app\core\Spy;
use app\core\Configer;

class Site
{
    public $spy;
    public $configer;
    public $router;
    public $checker;

    public function __construct()
    {
        $this->spy = new Spy;
        $this->configer = new Configer;
        $this->router = new Router;
        $this->checker = new Checker;
    }

}