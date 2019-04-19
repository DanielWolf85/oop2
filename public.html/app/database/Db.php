<?php

namespace app\database;

use app\core\Configer;
use mysqli;

class Db
{
    private $configer;
    private $db;
    public $mysqli = null;
    public $stmt = null;

    public function __construct()
    {
        // Используем Configer и получаем в db конфигурацию базы
        $this->configer = new Configer;
        $this->db = $this->configer->getDbConfig();
        
        // Пытаемся соединиться
        $mysqli = new mysqli($this->db['host'], $this->db['user'], $this->db['password'], $this->db['dbname']);
        $this->mysqli = $mysqli;            // пишем mysqli в переменную класса

        // Проверяем, удалось ли соединение
        if (mysqli_connect_errno()) {
            printf('Подключение не удалось: \n', mysqli_connect_error());
            exit();
        }

        // Устанавливаем кодировку соединения
        $mysqli->set_charset($this->db['charset']);
        
    }
    
}

