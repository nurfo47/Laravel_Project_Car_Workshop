<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarParts extends Model
{
    public $timestamps=false;
    use HasFactory;

    protected $fillable=[
        'pname',
        'price',
        'carworker_id',
    ];
}
