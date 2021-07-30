<?php
namespace App\Controllers;
use App\Models\Product;



class HomeController extends BaseController{
    public function index(){
        $this->render('layouts.main');

     }
}