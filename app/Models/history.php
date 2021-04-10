<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;

    public function devices(){
        return $this->belongsToMany('App\Models\device', 'device_id');
    }

protected $table="histories";
}
