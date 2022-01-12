<?php

namespace App\Repositories\Topic;

use App\Repositories\RepositoryEloquent;
use App\Models\Topic;
use App\Repositories\Topic\TopicRepositoryInterface;

class TopicRepositoryEloquent extends RepositoryEloquent implements TopicRepositoryInterface
{
    public function getModel()
    {
        return Topic::class;
    }

    public function getTopicByType($id)
    {
        $result = $this->_model
                            ->where('type_id', $id)
                            ->get();
        
        return $result;
    }
}