<?php

namespace app\core;

use app\dev\traits\requirer;
use app\dev\traits\getter;
use app\dev\traits\formatter;
use app\core\Configer;

class View
{
    use requirer;
    use getter;
    use formatter;


    public $viewsPath;                                  // путь ко всем видам
    public $layoutFile;                                 // файл оболочки
    public $viewFile;                                   // файл контента
    public $controllerName;
    public $actionName;

    public $configer;

    public function __construct()
    {
        $url = getter::getUrl();
        $arr = explode('Controller', formatter::toController( $url ));
        $new_arr = array_diff($arr, array(''));
        $this->controllerName = strtolower($new_arr[0]);                // получили имя контроллера как имя папки

        

        $this->configer = new Configer;
        $this->viewsPath = $this->configer->getViewsPath();
        $this->layoutFile = $this->viewsPath . 'layouts/' . $this->controllerName . '.php';
        
    }


    public function render( $fileName, $modelData )
    {
        $this->viewFile = $this->viewsPath . $this->controllerName . 
                          '/' . $fileName . '.php';
         
        ob_start();        
                                          // включаем буферизацию вывода
        require $this->viewFile;
                                                                 // здесь загружаем представление в буфер
        $content = ob_get_clean();                              // записываем содержимое буфера в $content и очищаем его (буфер)
        
        require $this->layoutFile;                      // здесь запрашиваем шаблон
        
    }
}