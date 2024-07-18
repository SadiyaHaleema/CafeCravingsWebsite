<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
     use HasFactory;

    protected $table='feedback';
    protected $primarykey = 'breakfastitem_id';
    public    $incrementing = true;
    public $timestamps =false;

    
}
