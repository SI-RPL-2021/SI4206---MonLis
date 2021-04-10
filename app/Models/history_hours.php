<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history_hours extends Model
{
    use HasFactory;
    public function devices(){
        return $this->belongsToMany('App\Models\device', 'device_id');
    }

protected $table="history_hours";
}
