<?php

namespace app\controllers;

use app\dev\classes\_Controller;
use app\core\View;
use app\models\IndexModel;


class SiteController extends _Controller
{
    // public $view
    // public $model



    public function __construct()
    {
        $this->view = new View;
    }


    public function actionIndex()
    {
        $model = new IndexModel;
        $login = $model->getLogin(1);
        $modelData = [
            'login' => $login
        ];
        
        $this->view->render( 'index', $modelData );
    }
}