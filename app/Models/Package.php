<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','price', 'description', 'start_date', 'end_state', 'trip_duration', 'status', 'image'
    ];
}
