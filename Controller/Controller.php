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
            $this->service = new UserService();
            $this->model = new User($_POST);

            if ($this->service->loginUser($this->model)) {
                //Redirect to CUG section
                $this->redirect('/login/index.php?cug=true');
            } else {
                //Redirect to login page
                echo "failure";
            }
        } else if (isset($_GET['register']) && $_GET['register'] === 'true') {
                require 'View/register.php';


        } else if (isset($_POST['register'])) {

            if ($_POST['password'] == $_POST['conpassword']) {
                //successfully registered

                //Redirect to CUG
                $this->service = new UserService();
                $this->model = new User($_POST);
                $this->service->registerUser($this->model);

            } else {
                //Redirect to register form
                echo "Password and Confirm password not match";
            }
        } else {
            require 'View/login.php';
        }
    }

}
?>