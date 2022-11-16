<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use App\Models\ProductModel;

class Product extends BaseController
{
    use ResponseTrait;
    public $model;
    public function __construct()
    {
        $this->model = new ProductModel();
    }
    public function index()
    {
        // $data['produk'] = $this->model->orderBy('id', 'desc')->findAll();
        $data['produk'] = $this->model->findAll();
        // return $this->respond($data);
        return view('produk_view', $data);
    }

    public function create()
    {
        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga')
        ];
        $this->model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'message' => [
                'success' => 'Data produk berhasil ditambah',
            ]
        ];
        return $this->respondCreated($response);
    }

    public function show($id = null)
    {
        $data = $this->model->where('id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan');
        }
    }

    public function update($id = null)
    {
        $id = $this->request->getVar('id');
        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga')
        ];
        $this->model->update($id, $data);
        $response = [
            'status' => 200,
            'error' => null,
            'message' => [
                'success' => 'Data produk berhasil diupdate'
            ]
        ];
        return $this->respondUpdated($response);
    }

    public function delete($id = null)
    {
        $data = $this->model->where('id', $id)->delete($id);
        if ($data) {
            $this->model->delete($id);
            $response = [
                'status' => 200,
                'error' => null,
                'message' => [
                    'success' => 'Data produk berhasil dihapus',
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan');
        }
    }
}
