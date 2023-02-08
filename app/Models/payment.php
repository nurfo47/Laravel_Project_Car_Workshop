<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    public $timestamps=false;
    use HasFactory;

    protected $fillable=[
        'date',
        'total',
        'carworker_id',
        'costumer_id',
    ];
}
