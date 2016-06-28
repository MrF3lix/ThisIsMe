<?php

class Model{
    public $data;
    public $db;

    public function checkUser($username, $password){  
        $this->db = new Database();        
		$this->db->sqlExec('SELECT * FROM User');
        while($row = mysqli_fetch_object($this->db->_results)){
			if ($row->username == $username && $row->password == $password){
                $this->data = array('status'=>'true','username'=>$row->username);
				$_SESSION['userid'] = $row->id;
				$_SESSION['username'] = $row->username;
				$_SESSION['token'] = uniqid();
				$_SESSION['access'] = $row->access;
                return $_SESSION['token'];
			}
		}
        return null;

    }

	//Shows login form with error message
	public function showForm(){
		$this->data = array('status'=>false, 'errorMsg'=>'Incorrect login data!');
		return $this->data;
	}

	public function showData(){
		return $this->data;
	}	
}

?>