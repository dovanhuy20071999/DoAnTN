<?php

namespace App\Repositories\Result;

use App\Repositories\RepositoryEloquent;
use App\Models\Result;
use App\Repositories\Result\ResultRepositoryInterface;

class ResultRepositoryEloquent extends RepositoryEloquent implements ResultRepositoryInterface
{
  public function getModel()
    {
        return Result::class;
    }
}