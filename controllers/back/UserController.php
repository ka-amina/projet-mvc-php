<?php
namespace controllers\back;

use core\controller;
use models\user;

class UserController extends controller{
    // protected $articles;
    protected $user;
    public function __construct(){
        $this->user= new user();
    }

   

    public function getLogin(){
        $this->render('front/login');
    }

    public function getRegister(){
        $this->render('front/register');
    }

    public function register(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Hashedpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
                $username = $_POST['full_name'];
                $email = $_POST['email'];
                $password = $Hashedpassword;
           
            $result = $this->user->register($email, $password, $username);
            if (!$result) {
                header("Location: register");
                exit();
            }else{
                header("Location: login");
                exit();
            }
        }
    }

    public function login(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $result = $this->user->login($email, $password);
            if ($result) {
                header('Location: /');
                exit();
            } else {
                header('Location: login');
            }
        }
    }


}
?>