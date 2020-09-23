<?php

namespace App\Controllers;

use App\Models\LoginModel;

class admin extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }
    public function admin()
    {
        return view('admin/admin');
    }
    public function login()
    {
        return view('admin/login');
    }
    public function cek_login()
    {
        $muser = new LoginModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $this->LoginModel->cek_login($username, $password);

        if (($cek['nama_user'] == $username) && ($cek['password'] == $password)) {
            session()->set('username', $cek['username']);
            session()->set('nama_user', $cek['nama_user']);
            return redirect()->to(base_url('Pages/Home'));
        } else {
            session()->setFlashdata('Gagal', 'Username atau Password Salah');
            return redirect()->to(base_url('Admin/Login'));
        }
    }

    //--------------------------------------------------------------------

}
