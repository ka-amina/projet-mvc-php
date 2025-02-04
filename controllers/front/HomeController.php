<?php
namespace controllers\front;

use core\controller;

class HomeController extends controller{
    public function home(){
        $this->render('front/home');
    }
}
?>