<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
   protected $guarded=[];

   public function relLeavetype(){
     return $this->belongsTo(Leavetype::class,'leavetype_id');
   }
}
