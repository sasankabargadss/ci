<?php

class Model_users extends CI_Model{
    function _construct(){
        parent::_construct();
}
function getFirstNames(){
    $query=$this->db->query('SELECT firstname FROM users');
    if($query->num_rows()>0){
        return $query->result();
    }
    else{
        return NULL;
    }
    }
    function getUsers(){
   $query=$this->db->query('SELECT * FROM users');
    if($query->num_rows()>0){
        return $query->result();
    }
    else{
        return NULL;
    } 
    }
}
