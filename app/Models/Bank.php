<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $table = "bank_card";

    protected $fillable = [
        'user_id',
        'bank_name',
        'money',
        'card_number',
    ];
}
