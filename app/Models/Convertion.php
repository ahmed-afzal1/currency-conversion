<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convertion extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'from_currency',
        'to_currency',
        'amount',
        'base_amount',
        'converted_amount',
    ];
}
