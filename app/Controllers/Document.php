<?php
namespace App\Controllers;
use App\Models\DocumentModel;
use App\Models\CategoryModel;

class Document extends BaseController
{
    protected $documentModel;
    protected $categoryModel;

    public function __construct() {
        $this->documentModel = new DocumentModel();
        $this->categoryModel = new CategoryModel();
    }

    public function index() {
        $data['documents'] = $this->documentModel->findAll();
        return view('document/index', $data);
    }

    public function upload() {
        helper(['form']);
        if ($this->request->getMethod() === 'post') {
            $file = $this->request->getFile('pdf_file');
            if ($file->isValid() && $file->getExtension() === 'pdf') {
                $newName = $file->getRandomName();
                $file->move('uploads/', $newName);

                $this->documentModel->save([
                    'title' => $this->request->getPost('title'),
                    'filename' => $newName,
                    'category_id' => $this->request->getPost('category'),
                    'uploaded_by' => session()->get('user_id'),
                ]);

                return redirect()->to('/documents');
            }
        }

        return view('document/upload', [
            'categories' => $this->categoryModel->findAll()
        ]);
    }

    public function preview($id) {
        $data['document'] = $this->documentModel->find($id);
        return view('document/preview', $data);
    }

    public function search() {
        $keyword = $this->request->getGet('q');
        $data['documents'] = $this->documentModel
                                 ->like('title', $keyword)
                                 ->orLike('filename', $keyword)
                                 ->findAll();
        return view('document/index', $data);
    }
}