<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        return redirect()->to('Login');
    }
    public function login()
    {
        return view('Login');
    }
}