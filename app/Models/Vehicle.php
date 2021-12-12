<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_plate',
        'vehicle_type',
    ];

    // relations
    public function marks(){
        return $this->belongsToMany('App\Models\Mark')->withTimestamps();
    }

    public function owners(){
        return $this->belongsToMany('App\Models\Owner')->withTimestamps();
    }
}
