<?php

class Model{
    public $article;
    public $db;

    public function getArticleById($id)
    {
        $this->db = new Database();
        $sqlstr = "SELECT * FROM Article WHERE id = ".$id;

        echo $sqlstr;

        $this->db->sqlExec($sqlstr);
        $this->article = $this->db->_results;

        while($row = mysqli_fetch_object($this->article)){
            $articleArr[] = array(
                'id' => $row->id,
                'title' => $row->title,
                'content' => $row->content,
                'picture' => $row->picture,
                'dateCreated' => $row->dateCreated,
                'userId' => $row->userId
            );
        }

        $this->article = $articleArr;
        $this->db = NULL;
        
        return $this->article;
    }

    public function saveArticle($data, $picture){        
        $this->db = new Database();
        $sqlstr = "UPDATE Article SET title='".$data['title']."', content='".$data['content']."',picture='".$picture."',dateCreated='".$data['dateCreated']."',userId='".$data['userId']."' WHERE id='".$data['id']."';";
        $this->db->sqlExec($sqlstr);

    }

    public function deleteArticle($id){
        $this->db = new Database();
        $sqlstr = 'DELETE FROM Article WHERE id = '.$id.'';
        $this->db->sqlExec($sqlstr);
    }
    
}

?>