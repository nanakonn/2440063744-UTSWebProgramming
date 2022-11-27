<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publishers extends Model
{
    use HasFactory;

    public function books(){
        return $this->hasMany('App\Models\books','Publisher_id');
    }

}
