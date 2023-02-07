<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectricityMeter extends Model
{
    use HasFactory;
    use Uuids;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'device_id',
        'description',
        'ebt',
        'location',
    ];
}//end class
