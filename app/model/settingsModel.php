<?php

class Model{
    public $data;
    public $db;
    public $user;
	
	public function showData(){
		return $this->data;
	}

    public function getUserData(){
        $this->db = new Database();
        $sqlstr = "SELECT * FROM User";

        $this->db->sqlExec($sqlstr);
        $this->user = $this->db->_results;

        while($row = mysqli_fetch_object($this->user)){
            $userArr[] = array(
                'id' => $row->id,
                'username' => $row->username,
                'image' => $row->image,
                'name' => $row->name,
                'surname' => $row->surname,
                'email' => $row->email,
                'password' => $row->password,
                'access' => $row->access,
                'description' => $row->description
            );
        }

        $this->user = $userArr;
        $this->db = NULL;
        
        return $this->user;
    }	
}

?>