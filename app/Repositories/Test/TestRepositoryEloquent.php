<?php

namespace App\Repositories\Test;

use App\Models\Test;
use App\Repositories\RepositoryEloquent;
use App\Repositories\Test\TestRepositoryInterface;

class TestRepositoryEloquent extends RepositoryEloquent implements TestRepositoryInterface
{
    public function getModel()
    {
        return Test::class;
    }

    public function getTestByTopic($id)
    {
        $result = $this->_model
                              ->where('topic_id', $id)
                              ->get();

        return $result;
    }

    public function getTestById($id)
    {
        $result = $this->_model
                              ->where('tests.id', $id)
                              ->joinActive()
                              ->selectActive()
                              ->get();

        return $result;
    }

    public function getTestForAdmin()
    {
        $result = $this->_model
                            ->joinGetTopicAndImage()
                            ->selectTopicNameAndImage()
                            ->get();

        return $result;
    }
}