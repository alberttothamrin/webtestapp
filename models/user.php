<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    public function registerform() 
    {
    	return view('registerform.blade');
    }
    
}
