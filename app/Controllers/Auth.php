<?php
namespace App\Controllers;
use App\Models\UserModel;

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index() {
        return redirect()->to('/login');
    }

    public function login() {
        return view('auth/login');
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}
