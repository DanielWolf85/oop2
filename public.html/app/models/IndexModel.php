<?php

namespace app\models;

use app\database\Db;


class IndexModel
{
    private $db = null;
    private $result = null;
    private $stmt;


    public function __construct()
    {
        $this->db = new Db;
        $this->stmt = $this->db->mysqli->stmt_init();
        
    }


    public function getLogin($id)
    {
        
        $this->stmt->prepare(
            'SELECT `login` FROM `users` WHERE `id` = ?'
        );

        $this->stmt->bind_param('i', $id);
        $this->stmt->execute();
        $this->stmt->bind_result($login);
        $this->stmt->store_result();
        $this->stmt->fetch();
        $this->stmt->close();
        
        return $login;
    }
}


