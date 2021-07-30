<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;

class ProductController extends BaseController{
    public function index(){
        $products = Product::all();
        $products->load('category');
        $this->render('admin.products.home', compact('products'));
    }
   
     public function addForm(){
         $categories = Category::all();
         $this->render('admin.products.add-form', compact('categories'));
     }
     public function saveForm(){
        $requestData = $_POST;
        $files = $_FILES['image'];
        $filename = 'public/uploads/' . uniqid() . '-' . $files['name'];
        move_uploaded_file($files['tmp_name'], './' . $filename);
        $requestData['image'] = $filename;
        
        $model = new Product();
        $model->fill($requestData);
        $model->save();
        header('location: ' . BASE_URL . 'product');
    }
    public function editForm($id){
        $categories = Category::all();
        $product = Product::find($id);
        if(!$product){
            header('location: ' . BASE_URL . 'product');
            die;
        }

        $this->render('admin.products.edit-form', compact('product', 'categories'));
    }
    public function saveEdit($id){
        $model = Product::find($id);
        if(!$model){
            header('location: ' . BASE_URL . 'category');
            die;
        }
        $requestData = $_POST;
        $files = $_FILES['image'];
        $filename = 'public/uploads/' . uniqid() . '-' . $files['name'];
        move_uploaded_file($files['tmp_name'], './' . $filename);
        $requestData['image'] = $filename;
        
        // $model = new Category();
        $model->fill($requestData);
        $model->save();
        header('location: ' . BASE_URL . 'product');
    }
   
    public function remove($id){
        $model = Product::find($id);
        $model->delete();
        header('location: ' . BASE_URL . 'product');
    }
}