<?php

namespace core;

// class controller{
//     protected function render($view,$data=[]){
//         extract($data);
//         include "../views/$view";
//     }
// }


namespace core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{
    protected $twig;

    public function render($view, $data = [])
    {
        $viewsPath = realpath(__DIR__ . '/../views');
        $loader = new FilesystemLoader($viewsPath);
        $this->twig = new Environment($loader);
        extract($data);
        echo $this->twig->render($view . ".twig", $data);
    }
}
