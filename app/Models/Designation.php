<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
   protected $guarded=[];
    public function departmentRel(){
      return $this->belongsTo(Department::class, 'department', 'id');
    }

    // public function relDesignation(){

    // }

    public function salaryStructure()
    {
      return $this->hasOne(Salarystracture::class,'DesignationType','id');
    }
}

