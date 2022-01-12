<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $table = 'topic_writing';

    protected $fillable = [
        'name',
        'description',
        'type_id',
    ];
}
