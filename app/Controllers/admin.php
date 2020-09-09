<?php

namespace App\Controllers;

class admin extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }
    public function admin()
    {
        return view('admin/admin');
    }
    public function login()
    {
        return view('admin/login');
    }
    public function signUp()
    {
        $this->form_validation->set_rules('fname','firstName','required | trim');
        $this->form_validation->set_rules('lname','lastName','required | trim');
        $this->form_validation->set_rules('uname','name','required | trim');
        
        if( $this->form_validation->run() == false){
            
            return view('admin/signUp');
        } else {
            echo 'Data has been updated:*'
        }
    }
    //--------------------------------------------------------------------

}
