<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject_name extends Model
{
    use HasFactory;
    public function sub(){
        return $this->belongsTo('App\Models\book');
    }
}
