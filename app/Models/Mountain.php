<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mountain extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'image', 'description', 'location', 'height', 'package_price', 'trek_difficulty'
    ];
}
