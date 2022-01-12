<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $table = 'tests';

    protected $fillable = [
        'topic_id',
        'question',
    ];

    public function scopeJoinActive($query)
    {
        return $query
                    ->leftjoin('images', 'images.id', '=', 'tests.image_id')
                    ->leftjoin('topic_writing', 'topic_writing.id', '=', 'tests.topic_id');
    }

    public function scopeSelectActive($query)
    {
        return $query
                    ->select('tests.*', 'images.base64', 'topic_writing.type_id');
    }

    public function scopeJoinGetTopicAndImage($query)
    {
        return $query
                    ->leftjoin('topic_writing', 'tests.topic_id', '=', 'topic_writing.id')
                    ->leftjoin('images', 'tests.image_id', '=', 'images.id');
    }

    public function scopeSelectTopicNameAndImage($query)
    {
        return $query
                    ->select('tests.*', 'topic_writing.name', 'images.base64');
    }
}