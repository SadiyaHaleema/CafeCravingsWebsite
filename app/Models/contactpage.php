<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactpage extends Model
{
    use HasFactory;
    protected $table = 'contact_page';
    protected $primarykey = 'contact_id';
    public $timestamps =false;

}
