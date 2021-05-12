<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    protected $table='receivers';
    protected $fillable =['name','tel', 'status'];
}
