<?php
namespace core;

class controller{
    protected function render($view,$data=[]){
        extract($data);
        include "../views/$view.twig";
    }
}
?>