<?php 

class Controller{
    private $view;
    private $model;
    private $user;

    public function __construct(){
        $this->model = new Model();
        $this->view = new View();
    }

    public function index()
    {  
        $this->user = $this->model->getUserData();
        return $this->view->showContent($this->user);
    }
}

?>