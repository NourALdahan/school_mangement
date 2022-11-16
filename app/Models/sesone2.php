<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sesone2 extends Model
{
    use HasFactory;
    public function sesone1(){
        return $this->belongsTo('App\Models\studant');
    }
}
