<?php

class ProductController extends BaseController
{
    private $productModel;

    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        return $this->view('fontend.products.index', [
            "products" => $products,
        ]);
    }

    public function show()
    {
        $id = $_GET['id'];
        $product = $this->productModel->getById($id);
        return $this->view('fontend.products.show', [
            "product" => $product,
        ]);
    }

    public function delete()
    {
        $id = $_GET['id'];
        $product = $this->productModel->deleteById($id);
        return $this->view('fontend.products.delete', [
            "product" => $product,
        ]);
    }

    public function create()
    {
        $data = [];
        $product = $this->productModel->store($data);
        return $this->view('fontend.products.create', [
            "product" => $product,
        ]);
    }

    public function update()
    {
        $id = $_GET['id'];
        $data = [];
        $product = $this->productModel->updateById($id, $data);
        return $this->view('fontend.products.update', [
            "product" => $product,
        ]);
    }
}
