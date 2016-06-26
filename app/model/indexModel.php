<?php

class Model{
    public $data;
    public $db;
    public $article;

    public function getUserFromId($id)
    {
        $this->db = new Database();
        $sqlstr = "SELECT * FROM User WHERE id = ".$id;

        $this->db->sqlExec($sqlstr);
        $this->data = $this->db->_results;

        while($row = mysqli_fetch_object($this->data)){
            return $row->username;
        }
    }

    public function getUserImageFromId($id)
    {
        $this->db = new Database();
        $sqlstr = "SELECT * FROM User WHERE id = ".$id;

        $this->db->sqlExec($sqlstr);
        $this->data = $this->db->_results;

        while($row = mysqli_fetch_object($this->data)){
            echo $row->image;
            return $row->image;
        }
    }

    public function getAllArticles(){
        $this->db = new Database();
        $sqlstr = "SELECT * FROM Article";

        $this->db->sqlExec($sqlstr);
        $this->data = $this->db->_results;

        while($row = mysqli_fetch_object($this->data)){
            $articleArr[] = array(
                'id' => $row->id,
                'title' => $row->title,
                'content' => $row->content,
                'picture' => $row->picture,
                'dateCreated' => $row->dateCreated,
                'username' => $this->getUserFromId($row->userId),
                'userImage' => $this->getUserImageFromId($row->userId)
            );
        }

        $this->article = $articleArr;
        $this->db = NULL;
        
        return $this->article;
    }
    
}

?>