<?php 
namespace App\Controllers;

use App\Models\Employee;
use App\Models\Train;

class TrainController extends BaseController{
    public function index(){
        $trains = Train::all();
       
        $this->render('admin.train.train', compact('trains'));
    }
    public function create(){
        $this->render('admin.train.create-train');
    }
    public function saveTrain(){
       $data = $_POST;
       if(!isset($data['mon'])){
           $data['mon'] = 0;
       }
       $model = new Train();
       $model->fill($data);
       $model->save();
       header('location: '. BASE_URL. 'train');

    }
    public function editTrain($id){
        $data = Train::find($id);
        $this->render('admin.train.edit-train', compact('data'));
    }
    public function saveEdit($id){
        $data = Train::find($id);
        if(!isset($data['mon'])){
            $data['mon'] = 0;
        }
        $input = $_POST;
        $data->fill($input);
        $data->save();
        header('location: ' . BASE_URL . 'train');
    }
    public function remove($id){
        $data = Train::find($id);
      
        $data->delete();
        header('location: ' . BASE_URL . 'train');

    }
}