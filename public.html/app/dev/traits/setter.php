<?php

namespace app\dev\traits;

trait setter                             // этот инструмент предназначен для установки данных
{
    private $db_config;
    public $ways;

    public function __construct()
    {
        $this->db_config = [
            'host' => '127.0.0.1',
            'dbname' => 'oop1',
            'user' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ];


        $this->ways = [
            'controllers_path' => '../app/controllers/',
            'views_path' => '../app/views/'
        ];
    }
}