<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $fillable = [
        'name',
        'carType',
        'rating',
        'fuel',
        'image',
        'hourRate',
        'dayRate',
        'monthRate',
    ];

    public function order() {
        return $this->hasMany(Order::class, 'carId','id');
    }
}
