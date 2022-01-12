<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essay extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type_id',
        'status',
        'content',
    ];

    public function scopeJoinActive($query)
    {
        return $query
                    ->leftjoin('users', 'essays.user_id', '=', 'users.id')
                    ->leftjoin('types', 'essays.type_id', '=', 'types.id');
    }

    public function scopeSelectActive($query)
    {
        return $query
                    ->select('essays.*', 'users.name', 'types.name_type');
    }
}
