<?php

class Model{
    public $data;
    public $db;

    //Creates new user
    public function newUser($data){
        $this->db = new Database();
        $sqlstr = "INSERT INTO User (id, username, image, name, surname, email, password, access, description) VALUES (NULL, '".$_POST['username']."', '', '".$_POST['name']."', '".$_POST['surname']."', '".$_POST['email']."', '".$_POST['password']."', 2, '');";

        echo $sqlstr;

        $this->db->sqlExec($sqlstr);
    }
}

?>