<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        $session = session();
        if ($this->request->getMethod() === 'post') {
            $model = new UserModel();
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user = $model->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'logged_in' => true
                ]);
                return redirect()->to('/documents');
            } else {
                return view('auth/login', ['error' => 'Username atau password salah']);
            }
        }

        return view('auth/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function index()
    {
        return redirect()->to('/login');
    }
}
