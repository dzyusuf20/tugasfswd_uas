<?php
namespace App\Controllers;
use App\Models\CategoryModel;

class Category extends BaseController
{
    public function index() {
        $model = new CategoryModel();
        $data['categories'] = $model->findAll();
        return view('category/index', $data);
    }

    public function add() {
        $model = new CategoryModel();
        if ($this->request->getMethod() === 'post') {
            $model->save(['name' => $this->request->getPost('name')]);
            return redirect()->to('/categories');
        }
        return view('category/add');
    }
}

// File: app/Models/UserModel.php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username', 'password', 'role'];
}
