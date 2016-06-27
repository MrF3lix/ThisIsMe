<?php 

class Controller{
    private $view;
    private $model;
    private $article;

    public function __construct(){
        $this->model = new Model();
        $this->view = new View();
    }

    public function indexPublic()
    {
        return $this->view->showPublicContent();        
    }

    public function register()
    {
        $this->model->newUser($_POST);
        header('Location: '.BASEURL.'?controller=login');   
    }
}

?>