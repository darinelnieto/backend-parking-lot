<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'identification_card',
        'phone',
        'email',
    ];

    // relations
    public function vehicles(){
        return $this->hasMany(Vehicle::class);
    }
}
