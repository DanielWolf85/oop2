<?php

namespace app\models;

use app\database\Db;


class Result
{
    private $db = null;
    private $stmt = null;
    private $result = null;

    public function __construct($min, $max)
    {
        $this->db = new Db;
        $stmt = $this->db->mysqli->stmt_init();
        
    }


    
}