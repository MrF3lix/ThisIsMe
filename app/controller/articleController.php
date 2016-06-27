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
        header('Location: '.BASEURL.'');   
    }
    
    public function edit($id)
    {
        $this->article = $this->model->getArticleById($id);
        return $this->view->showContent($this->article);
    }

    public function delete($id)
    {
        $this->model->deleteArticle($id);
        header('Location: '.BASEURL.'');  
    }

    public function save()
    {
        if(isset($_FILES["pictureUpload"]["name"]))
        {
            $target_dir = "./public/img/upload/";
            $target_file = $target_dir . uniqid() . basename($_FILES["pictureUpload"]["name"]);
            
            if(isset($_POST["title"])) {
                move_uploaded_file($_FILES["pictureUpload"]["tmp_name"], $target_file);
            }
        }
        else{
            $target_file = $_POST['picture'];
        }       

        $this->model->saveArticle($_POST, $target_file);
        header('Location: '.BASEURL.'');   
    }
}

?>