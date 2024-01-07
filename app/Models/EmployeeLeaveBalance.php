<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLeaveBalance extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function leaveType() {
        return $this->belongsTo(Leavetype::class);
    }
}

