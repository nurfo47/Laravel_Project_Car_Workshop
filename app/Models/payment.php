<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
//used just for testing, can't sum all prices to one total payment

class Payment extends Model
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
