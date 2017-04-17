<?php if ( ! defined ('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_users');
    }
    public function index(){
        $this->home();
        
    }
    public function home()
    {
        $this->load->helper('array');
        $data['title']='Array helper';
        $data['page_header']='Array Helpers';
        $data['firstnames']=$this->model_users->getUsers();
        $this->load->view('view_home',$data);
    }
}



