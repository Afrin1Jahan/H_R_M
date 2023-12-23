<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
   protected $guarded=[];
    public function department(){
      return $this->belongsTo(Department::class, 'department', 'id');
    }
}

