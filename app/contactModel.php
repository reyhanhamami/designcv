<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactModel extends Model
{
    protected $table = 'contact_models';
    public $fillable = ['id','email','ipaddress','phone','image','description'];
    
}
