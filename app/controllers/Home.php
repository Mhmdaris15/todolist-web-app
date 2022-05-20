<?php 

class Home extends Controller{
    public function index() {
        $data['title'] = 'Home Page';
        // $data['name'] = $this->model('User_model')->getUser();
        $data['ToDo'] = $this->model('ToDo_Model')->getAllToDo();
        $data['nama'] = 'Muhammad Aris Septanugroho';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}