<?php
namespace App\Controller;

use App\Model\User;
use App\Model\UserService;

class Controller {
    public $model;
    public $service;

    public function __construct(){
    }

    public function redirect($url){
        header("location: {$url}");
    }

    public function invoke()
    {
        if (isset($_POST['login'])) {
            //Create UserService && Get Uname PW
            $this->service = new UserService();
            $this->model = new User($_POST);

            if ($this->service->loginUser($this->model)) {
                //Redirect to CUG section
                session_start();
                $_SESSION['username'] = $this->model->getName();
                header("location: view/cug.php");
            } else {
                //Redirect to login page User not found
                $this->redirect('index.php?login=failed');
            }
        } else if (isset($_GET['register']) && $_GET['register'] === 'true') {
                require 'View/register.php';


        } else if (isset($_POST['register'])) {

            if ($_POST['password'] == $_POST['conpassword']) {
                //Create UserService && Get Uname PW
                $this->service = new UserService();
                $this->model = new User($_POST);

                if($this->service->registerUser($this->model)){
                    //successfully registered
                    //No Duplicate Found Redirect to CUG
                    $this->redirect("view/cug.php?user={$_POST['username']}");
                }
                else {
                    //Duplicate found Redirect
                    $this->redirect("index.php?register=true&user={$_POST['username']}_exists");
                }
            } else {
                //Redirect to register form PW doesn't match
                //header('Location: /login/index.php?register=true',true,406);
                //include("index.php?register=true&matchconflict");
               $this->redirect("index.php?register=true&matchconflict");
            }
        } else {
            require 'View/login.php';
        }
    }
}
?>