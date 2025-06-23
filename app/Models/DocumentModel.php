<?php
namespace App\Models;
use CodeIgniter\Model;
class DocumentModel extends Model
{
    protected $table = 'documents';
    protected $allowedFields = ['title', 'filename', 'category_id', 'uploaded_by'];
}
