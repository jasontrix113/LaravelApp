<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pledge extends Model
{
   
    
    protected $fillable = [
        'current_gr', 'pt_number', 'date','amount','article','name','address','contactnum','birthdate','appraiser'
    ];
}
