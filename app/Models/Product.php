<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table= "products";
    public $fillable = [
        'name', 'price', 'cate_id', 'image', 'short_desc', 'detail'
    ];
    public function category(){
        return $this->belongsTo(Category::class, 'cate_id');
    }
   
}