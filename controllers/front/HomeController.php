<?php
namespace controllers\front;

use core\controller;
use models\Article;

class HomeController extends controller{
    protected $articles;
    public function __construct(){
        $this->articles= new article();
    }

    public function home(){
        $allArticles=$this->articles->getArticles();
        $this->render('front/home',['articles'=>$allArticles]);
    }
}
?>