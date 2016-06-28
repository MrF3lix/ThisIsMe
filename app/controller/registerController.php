<?php 

class Controller{
    private $view;
    private $model;
    private $article;
    private $error;

    public function __construct(){
        $this->model = new Model();
        $this->view = new View();
    }

    public function indexPublic()
    {
        return $this->view->showPublicContent($this->error);       
    }

    public function register()
    {
        //Validate form
        if(isset($_POST['username']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password-repeat']))
        {
            //Validate if password and password-repeat are the same
            if($_POST['password'] == $_POST['password-repeat'])
            {
                $this->model->newUser($_POST);
                header('Location: '.BASEURL.'?controller=login');
            }
            else{
                header('Location: '.BASEURL.'?controller=register&action=error');
            }
        }
        else{ 
            header('Location: '.BASEURL.'?controller=register&action=error');
        }

    }

    //will be called via '$controller=register/action=error' to display an error message
    public function hasError(){
        $this->error = "Incorrect data!";
    }
}

?>