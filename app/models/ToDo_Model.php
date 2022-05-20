<?php

class ToDo_Model {
    private $table = 'tbltodo';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllToDo(){
        $this->table = $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function addToDo($data){
        $query = 'INSERT INTO tbltodo VALUES(:IdList, :IsFinished, :ToDoName, :DayDo)';
        
        $this->db->bind('IdList', $data['IdList']);
        $this->db->bind('IsFinished', $data['IsFinished']);
        $this->db->bind('ToDoName', $data['ToDoName']);
        $this->db->bind('DayDo', $data['DayDo']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}