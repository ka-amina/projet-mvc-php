<?php
namespace controllers\front;

use core\controller;
use models\Article;

class ArticleController extends controller{
    protected $articles;
    public function __construct(){
        $this->articles= new article();
    }

   

    public function article(){
        $article=$this->articles->getArticleById($_GET['id']);
        $this->render('front/article',['article'=>$article]);
    }
}
?>