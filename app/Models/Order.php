<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'status',
        'send_date',
        'essay_id',
        'test_id',
        'level_id',
        'deadline_id',
        'type_id',
        'total_price',
        'teacher_id',
        'result_id',
        'updated_at'
    ];

    public function scopeJoinActive($query)
    {
        return $query
                    ->leftjoin('tests', 'orders.test_id', '=', 'tests.id')
                    ->leftjoin('types', 'orders.type_id', '=', 'types.id')
                    ->leftjoin('essays', 'orders.essay_id', '=', 'essays.id')
                    ->leftjoin('teacher', 'teacher.id', '=', 'orders.teacher_id')
                    ->leftjoin('results', 'results.id', '=', 'orders.result_id')
                    ->leftjoin('users', 'orders.user_id', '=', 'users.id');      
    }

    public function scopeSelectActive($query)
    {
        return $query
                    ->select('orders.id', 'orders.user_id', 'orders.status', 'orders.updated_at', 'types.name_type', 'essays.content', 'teacher.teacher_name', 'results.gradle', 'tests.question', 'users.name');
    }
}
