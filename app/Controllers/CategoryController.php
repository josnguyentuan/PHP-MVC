<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;


class CategoryController extends BaseController{
    public function index(){
        $cates = Category::all();
        $cates->load('products');
        
        $this->render('admin.category.index', compact('cates'));
    }
    public function addForm(){
        $this->render('admin.category.add-form');
    }
    public function saveAdd(){
        $requestData = $_POST;
        if(!isset($requestData['show_menu'])){
            $requestData['show_menu'] = null;
        }
        $model = new Category();
        $model->fill($requestData);
        $model->save();
        header('location: ' . BASE_URL . 'category');
    }

    public function editForm($id){
        $cate = Category::find($id);
        $this->render('admin.category.edit-form', compact('cate'));
    }
    public function saveEdit($id){
        $model = Category::find($id);
        
        $requestData = $_POST;
        if(!isset($requestData['show_menu'])){
            $requestData['show_menu'] = null;
        }
        // $model = new Category();
        $model->fill($requestData);
        $model->save();
        header('location: ' . BASE_URL . 'category');
    }
    public function remove($id){
        $model = Category::find($id);
       
        $products = Product::where('cate_id', $id)->get();
        foreach ($products as $key => $item) {
            $item->delete();
        }
        $model->delete();
        header('location: ' . BASE_URL . 'category');
    }  

}
?>