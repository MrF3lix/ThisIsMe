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
        //Ino $id is provided or it is set to 0 the $id will be set by the current user id
        //This way it's not necessary to provide an $id if we want to the current user 
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
        //Ino $id is provided or it is set to 0 the $id will be set by the current user id
        //This way it's not necessary to provide an $id if we want to the current user 
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
        //Is a file provided in the upload 
        // -> if yes then move it to the upload direcotry
        // -> if no then it will take the saved picture which was already in the account
        if(isset($_FILES["pictureUpload"]["name"]))
        {
            $target_dir = "./public/img/upload/";
            $target_file = $target_dir . uniqid() . basename($_FILES["pictureUpload"]["name"]);
            move_uploaded_file($_FILES["pictureUpload"]["tmp_name"], $target_file);
        }
        else{
             $target_file = $_POST['image'];
        }
        $this->model->updateUserProfile($id, $target_file);  
        header('Location: '.BASEURL.'?controller=account');      
    }

    public function delete($id)
    {
        $this->model->deleteUserProfile($id);
        if($id == $_SESSION['userid'])
        {
            header('Location: '.BASEURL.'?controller=login&action=logout'); 
        }
        else{
            //return to previous URL
            header("Location: {$_SERVER['HTTP_REFERER']}");
        }
    }

    public function create()
    {
        //file upload when creating an article 
        $target_dir = "./public/img/upload/";
        $target_file = $target_dir . uniqid() . basename($_FILES["picture"]["name"]);
        
        if(isset($_POST["title"])) {
            move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
        }   

        $this->model->createNewPost($_POST, $target_file);
        header('Location: '.BASEURL.'?controller=account');     
    }
}

?>