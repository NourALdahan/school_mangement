<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_studant', 'user_id', 'age','Address','avg_mark','behaviour','accept','photo','certificate'
     ];
     public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id' );
    }
    public function studentinfo()
    {
        return $this->hasOne('App\Models\studentinfo');
    }
}

