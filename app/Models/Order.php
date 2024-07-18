<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primarykey = 'orderid';
    public $timestamps =false;
    // public $incrementing = true;


    public function user()
    {

        return $this->belongsTo('App\Models\User');

    }
}
