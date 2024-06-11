<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flow extends Model
{
    use HasFactory;
    protected $table = 'flow_table';
   

    // public function Township()
    // {
    //     return $this->belongsTo(Town::class, 'township_id','id');
    // }

    // public function userDetails()
    // {
    //     return $this->belongsTo(User::class, 'admin_id','id');
    // }
}
