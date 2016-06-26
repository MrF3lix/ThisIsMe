<?php 

class Controller{
    private $view;
    private $model;
    private $article;

    public function __construct(){
        $this->model = new Model();
        $this->view = new View();
    }

    public function index()
    {  
        $this->article = $this->model->getAllArticles();
        return $this->view->showContent($this->article);
    }
    
    public function indexPublic()
    {
        return $this->view->showPublicContent();        
    }
}

?>