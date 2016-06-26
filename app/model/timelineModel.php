<?php

class Model{
    public $data;
    public $db;

    public function getStartData(){        
        $this->db = new Database();
        $sqlstr = 'SELECT * FROM Article';

        $this->db->sqlExec($sqlstr);
        $this->data = $this->db->_results;

        while($row = mysqli_fetch_object($this->data)){
            $dataArr[] = array(
                'id' => $row->id,
                'title' => $row->title
            );
        }

        $this->data = $dataArr;
        $this->db = NULL;
        
        return $this->data;
    }
}

?>