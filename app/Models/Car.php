<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps=false;
    use HasFactory;

    protected $fillable=[
        'name',
        'model',
        'year',
        'motor_type',
        'id_brand',
        'id_costumer',
    ];
}
