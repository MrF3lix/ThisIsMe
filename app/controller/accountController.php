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
        if($id == 0)
        {
            $id = $_SESSION['userid'];
        }

        $this->data = $this->model->getUserProfile($id);
        return $this->view->editContent($this->data);
    }

    public function save($id)
    {
        $this->model->updateUserProfile($id);        
        header('Location: '.BASEURL.'?controller=account');
    }

    public function delete($id)
    {
        if(!$id == $_SESSIOn['userid'])
        {
            $this->model->deleteUserProfile($id);
        }
        return null;
    }

    public function create()
    {
        $this->model->createNewPost($_POST);
        header('Location: '.BASEURL.'?controller=account');
    }
}

?>