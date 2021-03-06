<?php

class Model{
    public $data;
    public $articel;
    public $db;

    //returns a userprofile with the given ID
    public function getUserProfile($id){        
        $this->db = new Database();
        $sqlstr = "SELECT * FROM User WHERE id = ".$id;

        $this->db->sqlExec($sqlstr);
        $this->data = $this->db->_results;

        while($row = mysqli_fetch_object($this->data)){
            $userArr[] = array(
                'id' => $row->id,
                'username' => $row->username,
                'name' => $row->name,
                'surname' => $row->surname,
                'email' => $row->email,
                'description' => $row->description,
                'image' => $row->image,
                'password' => $row->password
            );
        }

        $this->data = $userArr;
        $this->db = NULL;
        
        return $this->data;
    }

    //returns username from given ID
    public function getUserFromId($userId)
    {
        $this->db = new Database();
        $sqlstr = "SELECT * FROM User WHERE id = ".$userId;

        $this->db->sqlExec($sqlstr);
        $result = $this->db->_results;

        while($row = mysqli_fetch_object($result)){
            return $row->username;
        }
        return "";
    }
    
    //returns user image from ID
    public function getUserImageFromId($userId)
    {
        $this->db = new Database();
        $sqlstr = "SELECT * FROM User WHERE id = ".$userId;

        $this->db->sqlExec($sqlstr);

        $results = $this->db->_results;

        while($row = mysqli_fetch_object($results)){
            return $row->image;
        }
        return "";
    }

    //get article from given ID
    public function getUserArticles($id){
        $this->db = new Database();
        $sqlstr = "SELECT * FROM Article WHERE userId = ".$id." ORDER BY dateCreated DESC";

        $this->db->sqlExec($sqlstr);
        $this->articel = $this->db->_results;

        while($row = mysqli_fetch_object($this->articel)){
            $articleArr[] = array(
                'id' => $row->id,
                'title' => $row->title,
                'content' => $row->content,
                'picture' => $row->picture,
                'dateCreated' => $row->dateCreated,
                'username' => $this->getUserFromId($row->userId),
                'userImage' => $this->getUserImageFromId($row->userId),
                'userId' => $row->userId
            );
        }

        $this->article = $articleArr;
        $this->db = NULL;
        
        return $this->article;
    }

    //Update the user profile
    public function updateUserProfile($id, $image)
    {
        $this->db = new Database();
        $sqlstr = "UPDATE User SET username='".$_POST['username']."', image='".$image."',name='".$_POST['name']."',surname='".$_POST['surname']."',email='".$_POST['email']."',password='".$_POST['password']."',description='".$_POST['description']."' WHERE id='".$id."';";

        $this->db->sqlExec($sqlstr);
    }

    //delete the user profile with given ID
    public function deleteUserProfile($id)
    {
        $this->db = new Database();
        $sqlstr = "DELETE FROM User WHERE id = ".$id;

        $this->db->sqlExec($sqlstr);
        echo $sqlstr;
    }
    
    public function createNewPost($data, $image)
    {
        $this->db = new Database();
        $sqlstr = "INSERT INTO Article (id, title, content, picture, dateCreated, userId) VALUES (NULL, '".$data['title']."', '".$data['content']."', '".$image."',NULL, ".$_SESSION['userid'].");";

        $this->db->sqlExec($sqlstr);
    }
}

?>