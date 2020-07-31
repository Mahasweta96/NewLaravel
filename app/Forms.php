<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    protected $guarded = [];

    public function path()
    {
    	return route('forms.show',$this);
    } 
}
