<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ValidasiModel;

class ValidasiController extends BaseController 
{
    private $model;

    public function __construct()
    {
        $this->model = new ValidasiModel;
    }

    public function index()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek_user = $this->model->cek_user($username, $password);

        if (!$cek_user){
            session()->setFlashdata('error', 'Username atau password salah!');
            return redirect()->to('Login');
        }
        else {
            session()->setFlashdata('success', 'Login berhasil!');
            return redirect()->to('Home');
        }
    }
}

?>