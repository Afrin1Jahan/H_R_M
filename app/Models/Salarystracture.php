<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salarystracture extends Model
{
    use HasFactory;

    protected $guarded=[];
     public function relDesignation(){
          return $this->belongsTo(Designation::class,'DesignationType');
     }
}
