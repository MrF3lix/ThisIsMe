<?php 

class Controller{
    private $view;
    private $model;
    private $data;
    private $article;

    public function __construct(){
        $this->model = new Model();
        $this->view = new View();
    }

    public function index($id)
    {        
        if(!isset($id))
        {
            $id = $_SESSION['userid'];
        }

        if($id == 0)
        {
            $id = $_SESSION['userid'];
        }

        echo $id;

        $this->data = $this->model->getUserProfile($id);
        $this->article = $this->model->getUserArticles($id);

        return $this->view->showContent($this->data, $this->article);
    }

    public function edit($id)
    {
        if(!isset($id))
        {
            return null;
        }

        $this->data = $this->model->getUserProfile($id);
        return $this->view->editContent($this->data);
    }
}

?>