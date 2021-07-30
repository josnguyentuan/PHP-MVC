<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Train extends Model{
    protected $table = "trains";
    protected $fillable = ['name', 'start_time', 'recceive_time', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
    
}