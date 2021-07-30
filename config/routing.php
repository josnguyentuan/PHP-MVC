<?php

use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\ProductController;
use App\Controllers\TrainController;
use Phroute\Phroute\RouteCollector;
$url = isset($_GET['url'])? $_GET['url'] : "/";

$router = new RouteCollector();
######- Filter ---------------
    $router->filter('auth', function(){
        if(!isset($_SESSION['AUTH']) || empty($_SESSION['AUTH'])){
            header('location: ' .BASE_URL . 'login');
            die;
        }
    });
### End Filter
$router->get('/user/{name}', function($name){
    return 'Hello ' . $name;
}, ['before' => 'statsStart', 'after' => 'statsComplete']);
$router->group(['before' =>"auth"], function($router){
    $router->get('category', [CategoryController::class, 'index']);
    $router->get('category/add', [CategoryController::class, 'addForm']);
    $router->post('category/add', [CategoryController::class, 'saveAdd']);
    $router->get('category/edit/{id}', [CategoryController::class, 'editForm']);
    $router->post('category/edit/{id}', [CategoryController::class, 'saveEdit']);
    $router->get('category/delete/{id}', [CategoryController::class, 'remove']);
    $router->post('category/check-name', [CategoryController::class, 'checkNameExisted']);
    $router->get('product', [ProductController::class, 'index']);
    $router->get('product/add', [ProductController::class, 'addForm']);
    $router->post('product/add', [ProductController::class, 'saveForm']);
    $router->get('product/edit/{id}', [ProductController::class, 'editForm']);
    $router->post('product/edit/{id}', [ProductController::class, 'saveEdit']);
    $router->get('product/delete/{id}', [ProductController::class, 'remove']);
    $router->post('product/check-name', [ProductController::class, 'checkNameExisted']);


});

$router->get('/', [HomeController::class, 'index']);
$router->get('login', [LoginController::class, 'loginForm']);
$router->post('login', [LoginController::class, 'login']);
$router->any('logout', [LoginController::class, 'logout']);


$router->get('train', [TrainController::class, 'index']);
$router->get('train/add', [TrainController::class, 'create']);
$router->post('train/add', [TrainController::class, 'saveTrain']);
$router->get('train/edit/{id}', [TrainController::class, 'editTrain']);
$router->post('train/edit/{id}', [TrainController::class, 'saveEdit']);
$router->get('train/delete/{id}', [TrainController::class, 'remove']);



# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
    
// Print out the value returned from the dispatched function
echo $response;

?>
