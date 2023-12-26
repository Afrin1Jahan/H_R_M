<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded=[];

    public function departmentrel(){

        return $this->belongsTo(Department::class,'Department', 'id');

   }

   public function designationrel(){

    return $this->belongsTo(Designation::class,'Designation', 'id');

}


//    public function designation(){
//     return $this->belongsTo(Designation::class);
//    }
}
