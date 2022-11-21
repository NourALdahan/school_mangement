<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentinfo extends Model
{
    use HasFactory;
    protected $table = 'studentinfos';
    protected $fillable = [
        'class', 'division','studant_id',
     ];
     public function Student()
     {
         return $this->belongsTo('App\Models\Student', 'studant_id' );
     }  
}
