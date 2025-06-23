<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username', 'password', 'role'];
}

// File: app/Models/DocumentModel.php
namespace App\Models;
use CodeIgniter\Model;

class DocumentModel extends Model
{
    protected $table = 'documents';
    protected $allowedFields = ['title', 'filename', 'category_id', 'uploaded_by'];
}

// File: app/Models/CategoryModel.php
namespace App\Models;
use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $allowedFields = ['name'];
}
