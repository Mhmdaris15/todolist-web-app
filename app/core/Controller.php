<?php

class Controller {
    public function view($view, $data=[]){
        require_once $_SERVER['DOCUMENT_ROOT'] . '/learnphp/todolist/app/views/' . $view . '.php';
    }

    public function model($model){
        require_once $_SERVER['DOCUMENT_ROOT'] . '/learnphp/todolist/app/models/' . $model . '.php';
        return new $model;
    }
}