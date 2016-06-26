<?php 

class Controller{
    private $view;
    private $model;
    private $article;

    function __construct(){
        $this->model = new Model();
        $this->view = new View();
    }

    function index()
    {  
        $this->article = $this->model->getAllArticles();
        return $this->view->showContent($this->article);
    }
    
    function indexPublic()
    {
        return $this->view->showPublicContent();        
    }
}

?>