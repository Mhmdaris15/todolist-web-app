<?php

class List_Model {
    private $table;
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

}